<?php
$PluginInfo['gallery'] = [
    'Name' => 'Gallery',
    'Description' => 'Allows users to add a simple image gallery to their profile',
    'Version' => '0.1.3',
    'RequiredApplications' => ['Vanilla' => '>= 2.3'],
    'SettingsPermission' => 'Garden.Settings.Manage',
    'SettingsUrl' => '/dashboard/settings/gallery',
    'RegisterPermissions' => [
        'Plugins.Gallery.Add', // If role is allowed to have a gallery.
        'Plugins.Gallery.View', // If role is allowed to view galleries.
        'Plugins.Gallery.Manage' // If role is allowed to manage galleries.
    ],
    'MobileFriendly' => true,
    'HasLocale' => true,
    'Author' => 'Robin Jurinka',
    'AuthorUrl' => 'https://open.vanillaforums.com/profile/r_j',
    'License' => 'MIT'
];

/**
 * Todos:
 * Consider caching
 * Allow nameing of pictures
 */
class GalleryPlugin extends Gdn_Plugin {
    /**
     * Init config settings and db structure change.
     *
     * @return void.
     */
    public function setup() {
        touchConfig([
            'gallery.Image.MaxWidth' => 2000,
            'gallery.Image.MaxHeight' => 1000,
            'gallery.Thumb.Height' => 150,
            'gallery.Thumb.Width' => 150
        ]);
        $this->structure();
    }

    /**
     * Add columns to Media table.
     *
     * @return void.
     */
    public function structure() {
        Gdn::structure()
            ->table('Media')
            ->column('GalleryOrder', 'int', true)
            // ->column('GalleryTitle', 'varchar(64)', '')
            ->set();
        Gdn::structure()
            ->table('User')
            ->column('CountGalleries', 'int', null)
            ->set();
        (new activityModel())->defineType(
            'Gallery',
            [
                'AllowComments' => true,
                'ShowIcon' => true,
                'ProfileHeadline' => '%1$s has uploaded a new image to his gallery.',
                'FullHeadline' => '%1$s has uploaded a new image to his gallery.',
                'RouteCode' => 'profile',
                'Notify' => '0',
                'Public' => '1'
            ]
        );
    }

    /**
     * Simple settings page.
     *
     * @param settingsController $sender Instance of the calling class.
     *
     * @return void.
     */
    public function settingsController_gallery_create($sender) {
        $sender->permission('Garden.Settings.Manage');

        $sender->addSideMenu('dashboard/settings/plugins');
        $sender->setData('Title', t('Gallery Settings'));

        $configurationModule = new configurationModule($sender);

        $configurationModule->initialize(
            [
                'gallery.Image.MaxWidth' => [
                    'LabelCode' => 'Maximum Width of Uploaded Images',
                    'Default' => '2000',
                    'Options' => ['type' => 'number']
                ],
                'gallery.Image.MaxHeight' => [
                    'LabelCode' => 'Maximum Height of Uploaded Images',
                    'Default' => '1000',
                    'Options' => ['type' => 'number']
                ],
                'gallery.Thumb.Width' => [
                    'LabelCode' => 'Thumbnail Width',
                    'Default' => '150',
                    'Options' => ['type' => 'number']
                ],
                'gallery.Thumb.Height' => [
                    'LabelCode' => 'Thumbnail Height',
                    'Default' => '150',
                    'Options' => ['type' => 'number']
                ],
                'gallery.Image.MaxNum' => [
                    'LabelCode' => 'Maximum Number of Images per Gallery',
                    'Description' => 'There should be a limit of how much pictures a user should be allowed to show in his gallery.',
                    'Default' => '20',
                    'Options' => ['type' => 'number']
                ],
            ]
        );
        $configurationModule->renderAll();
    }

    /**
     * Add Gallery link to user profile.
     *
     * @param ProfileController $sender Instance of the calling class
     *
     * @return void.
     */
    public function profileController_addProfileTabs_handler($sender) {
        if (!Gdn::session()->checkPermission('Plugins.Gallery.View')) {
            return; // Ensure session user is allowed to view gallery.
        }
        if (!Gdn::userModel()->checkPermission($sender->User, 'Plugins.Gallery.Add')) {
            return; // Ensure profile user is allowed to add gallery.
        }

        $label = sprite('SpGallery').' '.t('Gallery');
        // Add count to label.
        if (c('Vanilla.Profile.ShowCounts', true)) {
            $label .= '<span class="Aside">';
            $label .= countString(
                $sender->User->CountGalleries,
                '/profile/count/galleries?userid='.$sender->User->UserID
            );
            $label .= '</span>';
        }

        // Insert a menu entry for the gallery.
        $sender->addProfileTab(
            t('Gallery'),
            userUrl($sender->User, '', 'gallery'),
            'Gallery',
            $label
        );
    }

    /**
     * Create endpoint in ProfileController and route requests.
     *
     * @param ProfileController $sender Instance of the calling class.
     *
     * @return void.
     */
    public function profileController_gallery_create($sender) {
        if (!Gdn::session()->checkPermission('Plugins.Gallery.View')) {
            throw permissionException(); // UserRole is not allowed to view.
        }

        // Get the user from the url and set to ProfileController.
        $sender->editMode(false);
        $sender->getUserInfo(
            val(0, $sender->RequestArgs, ''),
            val(1, $sender->RequestArgs, '')
        );

        if (!Gdn::userModel()->checkPermission($sender->User, 'Plugins.Gallery.Add')) {
            // Profile user is not allowed to have a gallery.
            throw notFoundException();
        }

        $sender->addJsFile('magnific-popup.min.js');
        $sender->addCssFile('magnific-popup.css', 'dashboard');

        // Set the breadcrumbs to match our page.
        $sender->setData(
            'Breadcrumbs',
            [
                ['Name' => t('Profile'), 'Url' => 'profile'],
                ['Name' => t('Gallery'), 'Url' => userUrl($sender->User, '', 'gallery')]
            ],
            'GalleryOrder, MediaID'
        );
        // Route:
        switch ($sender->Request->merged('action', '')) {
            case 'add':
                $this->controller_add($sender);
                break;
            case 'delete':
                $this->controller_delete($sender);
                break;
            case 'sort':
                $this->controller_sort($sender);
                break;
            default:
                $this->controller_index($sender);
        }
    }

    /**
     * Index of the simple gallery.
     *
     * Shows a list of all uploads with edit features for profile owners and
     * user with "Plugins.Gallery.Manage" permission.
     *
     * @param ProfileController $sender Instance of the calling class.
     *
     * @return void.
     */
    public function controller_index($sender) {
        $model = new Gdn_Model('Media');
        $media = $model->getWhere(
            [
                'InsertUserID' => $sender->User->UserID,
                'GalleryOrder is not null' => ''
            ],
            'GalleryOrder'
        )->resultArray();
        $sender->setData('Media', $media);
        $canEdit = $this->canEdit($sender->User);
        // Flag if user is allowed to edit uploads.
        $sender->setData('CanEdit', $canEdit);
        if ($canEdit) {
            $sender->addJsFile('html.sortable.min.js', 'plugins/gallery');
        }
        // Flag if user is allowed to add more uploads.
        $sender->setData('CanAdd',
            $canEdit && (
                c('gallery.Image.MaxNum') < 0 ||
                count($media) < c('gallery.Image.MaxNum')
            )
        );
        $sender->setData(
            'UploadUrl',
            userUrl($sender->User, '', 'gallery', ['action' =>'add'])
        );

        $sender->setData(
            'DeleteUrl',
            userUrl($sender->User, '', 'gallery', [
                'action' =>'delete',
                'tk' => Gdn::session()->transientKey(),
                'id' => ''
            ])
        );

        $sender->setTabView(t('Gallery'), 'index', '', 'plugins/gallery');
        $sender->render('index', 'ProfileController', 'dashboard');
    }

    /**
     * Add images to the gallery
     *
     * @param ProfileController $sender Instance of the calling class.
     *
     * @return void.
     */
    private function controller_add($sender) {
        $sender->Form = new Gdn_Form();
        if ($sender->Form->authenticatedPostBack() === true) {
            // Upload image and thumbnail.
            $targetFolder = PATH_UPLOADS.'/gallery/'.date('Ym');
            $imageInfo = $this->upload(
                'NewGalleryItem',
                $targetFolder,
                [
                    'MaxWidth' => c('gallery.Image.MaxWidth', 800),
                    'MaxHeight' => c('gallery.Image.MaxHeight', 600)
                ]
            );
            $thumbInfo = $this->upload(
                'NewGalleryItem',
                $targetFolder.'/thumbs',
                [
                    'MaxWidth' => c('gallery.Thumb.Height', 100),
                    'MaxHeight' => c('gallery.Thumb.Width', 100)
                ]
            );

            // Add error messages to form.
            if (!is_array($imageInfo)) {
                $sender->Form->addError($imageInfo);
            }
            if (!is_array($thumbInfo)) {
                $sender->Form->addError($thumbInfo);
            }
            // Save to Media table if there were no errors.
            if ($sender->Form->errorCount() == 0) {
                $mediaInfo = [
                    'InsertUserID' => $sender->User->UserID,
                    'ForeignID' => $sender->User->UserID,
                    'ForeignTable' => 'user',
                    'StorageMethod' => 'local',
                    'ThumbWidth' => $thumbInfo['ImageWidth'],
                    'ThumbHeight' => $thumbInfo['ImageHeight'],
                    'ThumbPath' => $thumbInfo['Path'],
                    'GalleryOrder' => $sender->User->CountGalleries + 1
                ];
                $mediaInfo['ThumbPath'] = substr($mediaInfo['ThumbPath'], strlen(PATH_UPLOADS) + 1);
                $imageInfo['Path'] = substr($imageInfo['Path'], strlen(PATH_UPLOADS) + 1);
                $model = new Gdn_Model('Media');
                $mediaID = $model->save(array_merge($imageInfo, $mediaInfo));
                Gdn::userModel()->setField(
                    $sender->User->UserID,
                    ['CountGalleries' => $sender->User->CountGalleries + 1]
                );

                $route = userUrl($sender->User, '', 'gallery');
                (new activityModel())->save(
                    [
                        'ActivityType' => 'Gallery',
                        'ActivityUserID' => Gdn::session()->UserID,
                        'HeadlineFormat' => '{ActivityUserID,user} added an image to his <a href="{Url}">gallery</a>.',
                        'Story' => '<img src="'.Gdn_Upload::url($mediaInfo['ThumbPath']).'">',
                        'Route' => $route
                    ]
                );

                $sender->RedirectUrl = $route;
            }
        }

        $sender->render('add', '', 'plugins/gallery');
    }

    /**
     * Delete images.
     *
     * Remove the thumbnail, the image and the db entry.
     *
     * @param ProfileController $sender Instance of the calling class.
     *
     * @return void.
     */
    private function controller_delete($sender) {
        $getArgs = $sender->Request->get();

        // Check transient key.
        if (!Gdn::session()->validateTransientKey($getArgs['tk'])) {
            throw permissionException();
        }

        // Get media information.
        $media = Gdn::sql()->getWhere(
            'Media',
            [
                'MediaID' => intval($getArgs['id']),
                'InsertUserID' => $sender->User->UserID
            ]
        )->firstRow();

        // If media does not exist, throw error.
        if ($media == false) {
            throw notFoundException('Image');
        }

        // Remove files.
        unlink(realpath(PATH_UPLOADS.'/'.$media->Path));
        unlink(realpath(PATH_UPLOADS.'/'.$media->ThumbPath));
        Gdn::sql()->delete(
            'Media',
            [
                'MediaID' => intval($getArgs['id']),
                'InsertUserID' => $sender->User->UserID
            ]
        );
        Gdn::userModel()->setField(
            $sender->User->UserID,
            ['CountGalleries' => max(0, $sender->User->CountGalleries - 1)]
        );
        redirect(userUrl($sender->User, '', 'gallery'));
    }

    /**
     * Sort images.
     * @param profileController $sender Instance of the calling class.
     *
     * @return void.
     */
    public function controller_sort($sender) {
        if (!$sender->Request->isAuthenticatedPostBack()) {
            throw permissionException();
        }

        // Get user and check permission.
        if (!$this->canEdit($sender->User)) {
            throw permissionException();
        }

        // Get new and old sort order.
        $newSort = explode(',', $sender->Request->post('NewSort', ''));
        $model = new Gdn_Model('Media');
        $media = $model->getWhere(
            [
                'InsertUserID' => $sender->User->UserID,
                'GalleryOrder is not null' => ''
            ],
            'GalleryOrder'
        )->resultArray();
        $oldSort = array_column($media, 'MediaID');
        // Compare and update sort order.
        foreach ($newSort as $index => $item) {
            if ($oldSort[$index] != $item) {
                $model->update(
                    ['GalleryOrder' => $index + 1],
                    ['InsertUserID' => $sender->User->UserID, 'MediaID' => $item]
                );
            }
        }
        Gdn::userModel()->setField(
            $sender->User->UserID,
            ['CountGalleries' => count($oldSort)]
        );
        /*
        echo json_encode(['InformMessages' => [[
            'Message' => t('Saved'),
            'CssClass' => 'Dismissable AutoDismiss'
        ]]]);
        */
    }

    /**
     * Helper function which shows if session user is allowed to edit users gallery.
     *
     * @param UserObject $user The user whose gallery should be edited.
     *
     * @return boolean Whether session user is allowed to edit users gallery.
     */
    private function canEdit($user) {
        if (!Gdn_UploadImage::canUploadImages()) {
            return false; // Image upload generally not possible
        }

        $session = Gdn::session();
        if (!Gdn::session()->checkPermission('Plugins.Gallery.Add')) {
            return false; // UserRole is not allowed for galleries.
        }
        if ($user->UserID == $session->UserID) {
            return true; // User is allowed to change his own gallery.
        }
        if ($session->checkPermission('Plugins.Gallery.Manage')) {
            return true; // UserRole is allowed to manage galleries.
        }

        return false; // Just in case we've missed something...
    }

    /**
     * Helper function which makes saving images even more easy.
     *
     * @param string $fieldName The field name in the form which holds the image.
     * @param string $targetFolder The folder where the image should be saved.
     * @param array $attributes Possible values are "Width", "Height",
     *                          "MaxWidth" and "MaxHeight". If Width/Height is
     *                          specified, those values are used. If MaxWidth/
     *                          MaxHeight is specified, they are checked against
     *                          pictures dimensions. If $attributes is empty,
     *                          image isn't resized at all.
     *
     * @return string|array Either the error message of the opoeration or an
     *                      array with info about the uploaded image.
     */
    private function upload($fieldName, $targetFolder, $attributes = []) {
        $uploadImage = new Gdn_UploadImage();
        try {
            // Validate the upload
            $tmpImage = $uploadImage->validateUpload($fieldName);
            $tmpImageProperties = getimagesize($tmpImage);
            // If width is not set, check for maxwidth.
            // If maxwidth is set, compare with image size.
            // If image size is above, set width.
            if (
                !isset($attributes['Width']) &&
                isset($attributes['MaxWidth']) &&
                $tmpImageProperties[0] > $attributes['MaxWidth']
            ) {
                $attributes['Width'] = $attributes['MaxWidth'];
            }
            // Same procedure for Height
            if (
                !isset($attributes['Height']) &&
                isset($attributes['MaxHeight']) &&
                $tmpImageProperties[0] > $attributes['MaxWidth']
            ) {
                $attributes['Height'] = $attributes['MaxHeight'];
            }

            $targetImage = $uploadImage->generateTargetName($targetFolder, '');
            $imgParsed = $uploadImage->saveImageAs(
                $tmpImage,
                $targetImage,
                val('Height', $attributes, ''),
                val('Width', $attributes, '')
            );

            $imageProperties = getimagesize($targetImage);
            $result = [
                'Name' => basename($imgParsed['Name']),
                'Path' => $targetImage,
                'Type' => $imageProperties['mime'],
                'Size' => filesize($targetImage),
                'ImageWidth' => $imageProperties[0],
                'ImageHeight' => $imageProperties[1],
            ];
        } catch (Exception $ex) {
            $result = $ex->getMessage();
        }
        return $result;
    }
}
