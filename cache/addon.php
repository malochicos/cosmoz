<?php return array (
  'conversations' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'description' => 'An improvement upon existing private messaging tools, Conversations allows multiple users to take part in private conversations.',
      'setupController' => 'setup',
      'url' => 'https://open.vanillaforums.com',
      'license' => 'GPL-2.0-only',
      'icon' => 'conversations.png',
      'key' => 'conversations',
      'type' => 'addon',
      'priority' => 10,
      'name' => 'Conversations',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Vanilla Staff',
          'email' => 'support@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com',
        ),
      ),
      'version' => '3.0',
      'oldType' => 'application',
      'keyRaw' => 'Conversations',
      'Issues' => 
      array (
      ),
    ),
     'classes' => 
    array (
      'conversationscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConversationsController',
          'path' => '/controllers/class.conversationscontroller.php',
        ),
      ),
      'messagescontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MessagesController',
          'path' => '/controllers/class.messagescontroller.php',
        ),
      ),
      'conversationsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConversationsApiController',
          'path' => '/controllers/api/ConversationsApiController.php',
        ),
      ),
      'messagesapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MessagesApiController',
          'path' => '/controllers/api/MessagesApiController.php',
        ),
      ),
      'conversationcounterprovider' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConversationCounterProvider',
          'path' => '/library/Menu/ConversationCounterProvider.php',
        ),
      ),
      'conversationmessagemodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConversationMessageModel',
          'path' => '/models/class.conversationmessagemodel.php',
        ),
      ),
      'conversationmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConversationModel',
          'path' => '/models/class.conversationmodel.php',
        ),
      ),
      'conversationsmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConversationsModel',
          'path' => '/models/class.conversationsmodel.php',
        ),
      ),
      'inthisconversationmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'InThisConversationModule',
          'path' => '/modules/class.inthisconversationmodule.php',
        ),
      ),
      'inboxmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'InboxModule',
          'path' => '/modules/class.inboxmodule.php',
        ),
      ),
      'clearhistorymodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ClearHistoryModule',
          'path' => '/modules/class.clearhistorymodule.php',
        ),
      ),
      'newconversationmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NewConversationModule',
          'path' => '/modules/class.newconversationmodule.php',
        ),
      ),
      'addpeoplemodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AddPeopleModule',
          'path' => '/modules/class.addpeoplemodule.php',
        ),
      ),
      'conversationshooks' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConversationsHooks',
          'path' => '/settings/class.hooks.php',
        ),
      ),
    ),
     'subdir' => '/applications/conversations',
     'translations' => 
    array (
      'en' => 
      array (
        0 => '/locale/en.php',
      ),
    ),
     'special' => 
    array (
      'plugin' => 'ConversationsHooks',
      'structure' => '/settings/structure.php',
      'config' => '/settings/configuration.php',
    ),
  )),
  'dashboard' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'description' => 'Handles user, role, permission, plugin, theme, and application management.',
      'allowDisable' => false,
      'url' => 'https://open.vanillaforums.com',
      'license' => 'GPL-2.0-only',
      'priority' => 5,
      'hidden' => true,
      'icon' => 'dashboard.png',
      'key' => 'dashboard',
      'type' => 'addon',
      'name' => 'Dashboard',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Vanilla Staff',
          'email' => 'support@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com',
        ),
      ),
      'version' => '3.0',
      'oldType' => 'application',
      'keyRaw' => 'Dashboard',
      'Issues' => 
      array (
      ),
    ),
     'classes' => 
    array (
      'settingscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SettingsController',
          'path' => '/controllers/class.settingscontroller.php',
        ),
      ),
      'searchcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SearchController',
          'path' => '/controllers/class.searchcontroller.php',
        ),
      ),
      'utilitycontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UtilityController',
          'path' => '/controllers/class.utilitycontroller.php',
        ),
      ),
      'profilecontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ProfileController',
          'path' => '/controllers/class.profilecontroller.php',
        ),
      ),
      'importcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ImportController',
          'path' => '/controllers/class.importcontroller.php',
        ),
      ),
      'assetcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AssetController',
          'path' => '/controllers/class.assetcontroller.php',
        ),
      ),
      'modulecontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ModuleController',
          'path' => '/controllers/class.modulecontroller.php',
        ),
      ),
      'plugincontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'PluginController',
          'path' => '/controllers/class.plugincontroller.php',
        ),
      ),
      'statisticscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'StatisticsController',
          'path' => '/controllers/class.statisticscontroller.php',
        ),
      ),
      'dashboardcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DashboardController',
          'path' => '/controllers/class.dashboardcontroller.php',
        ),
      ),
      'routescontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RoutesController',
          'path' => '/controllers/class.routescontroller.php',
        ),
      ),
      'sessioncontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SessionController',
          'path' => '/controllers/class.sessioncontroller.php',
        ),
      ),
      'usercontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserController',
          'path' => '/controllers/class.usercontroller.php',
        ),
      ),
      'staticcontentcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'StaticContentController',
          'path' => '/controllers/StaticContentController.php',
        ),
      ),
      'entrycontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'EntryController',
          'path' => '/controllers/class.entrycontroller.php',
        ),
      ),
      'embedcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'EmbedController',
          'path' => '/controllers/class.embedcontroller.php',
        ),
      ),
      'rootcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RootController',
          'path' => '/controllers/class.rootcontroller.php',
        ),
      ),
      'logcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'LogController',
          'path' => '/controllers/class.logcontroller.php',
        ),
      ),
      'rolecontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RoleController',
          'path' => '/controllers/class.rolecontroller.php',
        ),
      ),
      'activitycontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ActivityController',
          'path' => '/controllers/class.activitycontroller.php',
        ),
      ),
      'addoncachecontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AddonCacheController',
          'path' => '/controllers/class.addoncachecontroller.php',
        ),
      ),
      'tickapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TickApiController',
          'path' => '/controllers/TickApiController.php',
        ),
      ),
      'notificationscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NotificationsController',
          'path' => '/controllers/class.notificationscontroller.php',
        ),
      ),
      'setupcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SetupController',
          'path' => '/controllers/class.setupcontroller.php',
        ),
      ),
      'dbacontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DbaController',
          'path' => '/controllers/class.dbacontroller.php',
        ),
      ),
      'homecontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'HomeController',
          'path' => '/controllers/class.homecontroller.php',
        ),
      ),
      'messagecontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MessageController',
          'path' => '/controllers/class.messagecontroller.php',
        ),
      ),
      'robotscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RobotsController',
          'path' => '/controllers/RobotsController.php',
        ),
      ),
      'socialcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SocialController',
          'path' => '/controllers/class.socialcontroller.php',
        ),
      ),
      'authenticatecontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AuthenticateController',
          'path' => '/controllers/class.authenticatecontroller.php',
        ),
      ),
      'authenticateapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AuthenticateApiController',
          'path' => '/controllers/api/AuthenticateApiController.php',
        ),
      ),
      'themesapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ThemesApiController',
          'path' => '/controllers/api/ThemesApiController.php',
        ),
      ),
      'usersapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UsersApiController',
          'path' => '/controllers/api/UsersApiController.php',
        ),
      ),
      'dashboardapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Dashboard\\Api\\',
          'className' => 'DashboardApiController',
          'path' => '/controllers/api/DashboardApiController.php',
        ),
      ),
      'themesapischemes' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ThemesApiSchemes',
          'path' => '/controllers/api/ThemesApiSchemes.php',
        ),
      ),
      'tokensapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TokensApiController',
          'path' => '/controllers/api/TokensApiController.php',
        ),
      ),
      'addonsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AddonsApiController',
          'path' => '/controllers/api/AddonsApiController.php',
        ),
      ),
      'abstractapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AbstractApiController',
          'path' => '/controllers/api/AbstractApiController.php',
        ),
      ),
      'openapiapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Dashboard\\Controllers\\API\\',
          'className' => 'OpenApiApiController',
          'path' => '/controllers/api/OpenApiApiController.php',
        ),
      ),
      'localesapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'LocalesApiController',
          'path' => '/controllers/api/LocalesApiController.php',
        ),
      ),
      'rolesapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RolesApiController',
          'path' => '/controllers/api/RolesApiController.php',
        ),
      ),
      'applicantsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ApplicantsApiController',
          'path' => '/controllers/api/ApplicantsApiController.php',
        ),
      ),
      'sourcemapsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SourcemapsApiController',
          'path' => '/controllers/api/SourcemapsApiController.php',
        ),
      ),
      'notificationsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Dashboard\\Api\\',
          'className' => 'NotificationsApiController',
          'path' => '/controllers/api/NotificationsApiController.php',
        ),
      ),
      'authenticatorsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AuthenticatorsApiController',
          'path' => '/controllers/api/AuthenticatorsApiController.php',
        ),
      ),
      'invitesapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'InvitesApiController',
          'path' => '/controllers/api/InvitesApiController.php',
        ),
      ),
      'mediaapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MediaApiController',
          'path' => '/controllers/api/MediaApiController.php',
        ),
      ),
      'emailtemplate' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'EmailTemplate',
          'path' => '/library/class.emailtemplate.php',
        ),
      ),
      'nestedcollectionadapter' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NestedCollectionAdapter',
          'path' => '/library/class.nestedcollectionadapter.php',
        ),
      ),
      'staticinitializer' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'StaticInitializer',
          'path' => '/library/class.staticinitializer.php',
        ),
      ),
      'nestedcollection' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NestedCollection',
          'path' => '/library/class.nestedcollection.php',
        ),
      ),
      'gdn_iemailtemplate' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'Gdn_IEmailTemplate',
          'path' => '/library/interface.iemailtemplate.php',
        ),
      ),
      'rawemailtemplate' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RawEmailTemplate',
          'path' => '/library/class.rawemailtemplate.php',
        ),
      ),
      'executeactivityqueue' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ExecuteActivityQueue',
          'path' => '/library/Jobs/ExecuteActivityQueue.php',
        ),
      ),
      'activitycounterprovider' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ActivityCounterProvider',
          'path' => '/library/Menu/ActivityCounterProvider.php',
        ),
      ),
      'logcounterprovider' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'LogCounterProvider',
          'path' => '/library/Menu/LogCounterProvider.php',
        ),
      ),
      'rolecounterprovider' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RoleCounterProvider',
          'path' => '/library/Menu/RoleCounterProvider.php',
        ),
      ),
      'regardingmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RegardingModel',
          'path' => '/models/class.regardingmodel.php',
        ),
      ),
      'userauthenticationnoncemodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserAuthenticationNonceModel',
          'path' => '/models/class.userauthenticationnoncemodel.php',
        ),
      ),
      'exportmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ExportModel',
          'path' => '/models/class.exportmodel.php',
        ),
      ),
      'tiny_diff' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'Tiny_diff',
          'path' => '/models/tiny_diff.php',
        ),
      ),
      'userauthenticationtokenmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserAuthenticationTokenModel',
          'path' => '/models/class.userauthenticationtokenmodel.php',
        ),
      ),
      'rolemodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RoleModel',
          'path' => '/models/class.rolemodel.php',
        ),
      ),
      'shortcircuitexception' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Dashboard\\Models\\',
          'className' => 'ShortCircuitException',
          'path' => '/models/ShortCircuitException.php',
        ),
      ),
      'logmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'LogModel',
          'path' => '/models/class.logmodel.php',
        ),
      ),
      'usermodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserModel',
          'path' => '/models/class.usermodel.php',
        ),
      ),
      'messagemodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MessageModel',
          'path' => '/models/class.messagemodel.php',
        ),
      ),
      'tagmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TagModel',
          'path' => '/models/class.tagmodel.php',
        ),
      ),
      'reflectionaction' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Dashboard\\Models\\',
          'className' => 'ReflectionAction',
          'path' => '/models/ReflectionAction.php',
        ),
      ),
      'usermetamodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserMetaModel',
          'path' => '/models/class.usermetamodel.php',
        ),
      ),
      'smf2importmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'Smf2ImportModel',
          'path' => '/models/class.smf2importmodel.php',
        ),
      ),
      'dbamodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DBAModel',
          'path' => '/models/class.dbamodel.php',
        ),
      ),
      'updatemodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UpdateModel',
          'path' => '/models/class.updatemodel.php',
        ),
      ),
      'importmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ImportModel',
          'path' => '/models/class.importmodel.php',
        ),
      ),
      'swaggermodel' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Dashboard\\Models\\',
          'className' => 'SwaggerModel',
          'path' => '/models/SwaggerModel.php',
        ),
      ),
      'activitymodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ActivityModel',
          'path' => '/models/class.activitymodel.php',
        ),
      ),
      'mediamodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MediaModel',
          'path' => '/models/class.mediamodel.php',
        ),
      ),
      'banmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'BanModel',
          'path' => '/models/class.banmodel.php',
        ),
      ),
      'sessionmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SessionModel',
          'path' => '/models/class.sessionmodel.php',
        ),
      ),
      'vbulletinimportmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'vBulletinImportModel',
          'path' => '/models/class.vbulletinimportmodel.php',
        ),
      ),
      'permissionmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'PermissionModel',
          'path' => '/models/class.permissionmodel.php',
        ),
      ),
      'attachmentmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AttachmentModel',
          'path' => '/models/class.attachmentmodel.php',
        ),
      ),
      'vanilla1importmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'Vanilla1ImportModel',
          'path' => '/models/class.vanilla1importmodel.php',
        ),
      ),
      'localemodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'LocaleModel',
          'path' => '/models/class.localemodel.php',
        ),
      ),
      'searchmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SearchModel',
          'path' => '/models/class.searchmodel.php',
        ),
      ),
      'spammodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SpamModel',
          'path' => '/models/class.spammodel.php',
        ),
      ),
      'invitationmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'InvitationModel',
          'path' => '/models/class.invitationmodel.php',
        ),
      ),
      'menumodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MenuModule',
          'path' => '/modules/class.menumodule.php',
        ),
      ),
      'dashboardnavmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DashboardNavModule',
          'path' => '/modules/class.dashboardnavmodule.php',
        ),
      ),
      'profilefiltermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ProfileFilterModule',
          'path' => '/modules/class.profilefiltermodule.php',
        ),
      ),
      'userbanmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserBanModule',
          'path' => '/modules/class.userbanmodule.php',
        ),
      ),
      'sidemenumodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SideMenuModule',
          'path' => '/modules/class.sidemenumodule.php',
        ),
      ),
      'userphotomodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserPhotoModule',
          'path' => '/modules/class.userphotomodule.php',
        ),
      ),
      'tracemodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TraceModule',
          'path' => '/modules/class.tracemodule.php',
        ),
      ),
      'activityfiltermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ActivityFilterModule',
          'path' => '/modules/class.activityfiltermodule.php',
        ),
      ),
      'configurationmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConfigurationModule',
          'path' => '/modules/class.configurationmodule.php',
        ),
      ),
      'pagermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'PagerModule',
          'path' => '/modules/class.pagermodule.php',
        ),
      ),
      'dropdownmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DropdownModule',
          'path' => '/modules/class.dropdownmodule.php',
        ),
      ),
      'memodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MeModule',
          'path' => '/modules/class.memodule.php',
        ),
      ),
      'morepagermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MorePagerModule',
          'path' => '/modules/class.morepagermodule.php',
        ),
      ),
      'tablesummarymodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TableSummaryModule',
          'path' => '/modules/class.tablesummarymodule.php',
        ),
      ),
      'sitenavmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SiteNavModule',
          'path' => '/modules/class.sitenavmodule.php',
        ),
      ),
      'mediaitemmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MediaItemModule',
          'path' => '/modules/class.mediaitemmodule.php',
        ),
      ),
      'settingsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SettingsModule',
          'path' => '/modules/class.settingsmodule.php',
        ),
      ),
      'recentactivitymodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RecentActivityModule',
          'path' => '/modules/class.recentactivitymodule.php',
        ),
      ),
      'headmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'HeadModule',
          'path' => '/modules/class.headmodule.php',
        ),
      ),
      'messagemodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MessageModule',
          'path' => '/modules/class.messagemodule.php',
        ),
      ),
      'recentusermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RecentUserModule',
          'path' => '/modules/class.recentusermodule.php',
        ),
      ),
      'userinfomodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserInfoModule',
          'path' => '/modules/class.userinfomodule.php',
        ),
      ),
      'cropimagemodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CropImageModule',
          'path' => '/modules/class.cropimagemodule.php',
        ),
      ),
      'guestmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GuestModule',
          'path' => '/modules/class.guestmodule.php',
        ),
      ),
      'signedinmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SignedInModule',
          'path' => '/modules/class.signedinmodule.php',
        ),
      ),
      'userboxmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserBoxModule',
          'path' => '/modules/class.userboxmodule.php',
        ),
      ),
      'togglemenumodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ToggleMenuModule',
          'path' => '/modules/class.togglemenumodule.php',
        ),
      ),
      'conditionmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ConditionModule',
          'path' => '/modules/class.conditionmodule.php',
        ),
      ),
      'sitetotalsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SiteTotalsModule',
          'path' => '/modules/class.sitetotalsmodule.php',
        ),
      ),
      'profileoptionsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ProfileOptionsModule',
          'path' => '/modules/class.profileoptionsmodule.php',
        ),
      ),
      'navmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NavModule',
          'path' => '/modules/class.navmodule.php',
        ),
      ),
      'dashboardhooks' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DashboardHooks',
          'path' => '/settings/class.hooks.php',
        ),
      ),
    ),
     'subdir' => '/applications/dashboard',
     'translations' => 
    array (
      'en' => 
      array (
        0 => '/locale/en.php',
      ),
    ),
     'special' => 
    array (
      'plugin' => 'DashboardHooks',
      'structure' => '/settings/structure.php',
      'config' => '/settings/configuration.php',
    ),
  )),
  'vanilla' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'allowDisable' => false,
      'description' => 'Vanilla is the sweetest discussion forum on the web.',
      'setupController' => 'setup',
      'url' => 'https://open.vanillaforums.com',
      'license' => 'GPL v2',
      'hidden' => true,
      'icon' => 'vanilla.png',
      'key' => 'vanilla',
      'type' => 'addon',
      'priority' => 10,
      'name' => 'Vanilla',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Vanilla Staff',
          'email' => 'support@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com',
        ),
      ),
      'version' => '3.0',
      'oldType' => 'application',
      'keyRaw' => 'Vanilla',
      'Issues' => 
      array (
      ),
    ),
     'classes' => 
    array (
      'discussionscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionsController',
          'path' => '/controllers/class.discussionscontroller.php',
        ),
      ),
      'vanillacontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaController',
          'path' => '/controllers/class.vanillacontroller.php',
        ),
      ),
      'vanillasettingscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaSettingsController',
          'path' => '/controllers/class.vanillasettingscontroller.php',
        ),
      ),
      'categoriescontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoriesController',
          'path' => '/controllers/class.categoriescontroller.php',
        ),
      ),
      'postcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'PostController',
          'path' => '/controllers/class.postcontroller.php',
        ),
      ),
      'discussioncontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionController',
          'path' => '/controllers/class.discussioncontroller.php',
        ),
      ),
      'draftscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DraftsController',
          'path' => '/controllers/class.draftscontroller.php',
        ),
      ),
      'moderationcontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ModerationController',
          'path' => '/controllers/class.moderationcontroller.php',
        ),
      ),
      'categorycontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoryController',
          'path' => '/controllers/class.categorycontroller.php',
        ),
      ),
      'tagscontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TagsController',
          'path' => '/controllers/class.tagscontroller.php',
        ),
      ),
      'commentsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CommentsApiController',
          'path' => '/controllers/api/CommentsApiController.php',
        ),
      ),
      'categoriesapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoriesApiController',
          'path' => '/controllers/api/CategoriesApiController.php',
        ),
      ),
      'draftsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DraftsApiController',
          'path' => '/controllers/api/DraftsApiController.php',
        ),
      ),
      'discussionsapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionsApiController',
          'path' => '/controllers/api/DiscussionsApiController.php',
        ),
      ),
      'categorycollection' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoryCollection',
          'path' => '/library/class.categorycollection.php',
        ),
      ),
      'usercounterprovider' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Forum\\Menu\\',
          'className' => 'UserCounterProvider',
          'path' => '/library/Menu/UserCounterProvider.php',
        ),
      ),
      'forumbreadcrumbprovider' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Forum\\Navigation\\',
          'className' => 'ForumBreadcrumbProvider',
          'path' => '/library/Navigation/ForumBreadcrumbProvider.php',
        ),
      ),
      'forumcategoryrecordtype' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Forum\\Navigation\\',
          'className' => 'ForumCategoryRecordType',
          'path' => '/library/Navigation/ForumCategoryRecordType.php',
        ),
      ),
      'commentmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CommentModel',
          'path' => '/models/class.commentmodel.php',
        ),
      ),
      'draftmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DraftModel',
          'path' => '/models/class.draftmodel.php',
        ),
      ),
      'categorymodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoryModel',
          'path' => '/models/class.categorymodel.php',
        ),
      ),
      'vanillamodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaModel',
          'path' => '/models/class.vanillamodel.php',
        ),
      ),
      'vanillasearchmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaSearchModel',
          'path' => '/models/class.vanillasearchmodel.php',
        ),
      ),
      'discussionmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionModel',
          'path' => '/models/class.discussionmodel.php',
        ),
      ),
      'categorymoderatorsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoryModeratorsModule',
          'path' => '/modules/class.categorymoderatorsmodule.php',
        ),
      ),
      'discussionsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionsModule',
          'path' => '/modules/class.discussionsmodule.php',
        ),
      ),
      'promotedcontentmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'PromotedContentModule',
          'path' => '/modules/class.promotedcontentmodule.php',
        ),
      ),
      'categoryfollowtogglemodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoryFollowToggleModule',
          'path' => '/modules/class.categoryfollowtogglemodule.php',
        ),
      ),
      'discussionssortfiltermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionsSortFilterModule',
          'path' => '/modules/class.discussionssortfiltermodule.php',
        ),
      ),
      'categoriesmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CategoriesModule',
          'path' => '/modules/class.categoriesmodule.php',
        ),
      ),
      'newdiscussionmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NewDiscussionModule',
          'path' => '/modules/class.newdiscussionmodule.php',
        ),
      ),
      'userdiscussionsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserDiscussionsModule',
          'path' => '/modules/class.userdiscussionsmodule.php',
        ),
      ),
      'bookmarkedmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'BookmarkedModule',
          'path' => '/modules/class.bookmarkedmodule.php',
        ),
      ),
      'discussionfiltermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionFilterModule',
          'path' => '/modules/class.discussionfiltermodule.php',
        ),
      ),
      'draftsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DraftsModule',
          'path' => '/modules/class.draftsmodule.php',
        ),
      ),
      'usercommentsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'UserCommentsModule',
          'path' => '/modules/class.usercommentsmodule.php',
        ),
      ),
      'tagmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TagModule',
          'path' => '/modules/class.tagmodule.php',
        ),
      ),
      'discussionsortermodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscussionSorterModule',
          'path' => '/modules/class.discussionsortermodule.php',
        ),
      ),
      'flatcategorymodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'FlatCategoryModule',
          'path' => '/modules/class.flatcategorymodule.php',
        ),
      ),
      'vanillahooks' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaHooks',
          'path' => '/settings/class.hooks.php',
        ),
      ),
    ),
     'subdir' => '/applications/vanilla',
     'translations' => 
    array (
      'en' => 
      array (
        0 => '/locale/en.php',
      ),
    ),
     'special' => 
    array (
      'plugin' => 'VanillaHooks',
      'structure' => '/settings/structure.php',
      'config' => '/settings/configuration.php',
    ),
  )),
  'stubcontent' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Stub Content',
      'description' => 'This plugin adds stub content to new forums.',
      'version' => '1.0',
      'mobileFriendly' => true,
      'requiredTheme' => false,
      'hasLocale' => false,
      'registerPermissions' => false,
      'icon' => 'stubcontent-plugin.png',
      'key' => 'stubcontent',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Tim Gunter',
          'email' => 'tim@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'stubcontentplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'StubContentPlugin',
          'path' => '/class.stubcontent.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/stubcontent',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'StubContentPlugin',
    ),
  )),
  'akismet' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Akismet',
      'description' => 'Adds Akismet spam filtering to all posts by unverified users and applicant registrations.',
      'version' => '1.2',
      'settingsUrl' => '/settings/akismet',
      'settingsPermission' => 'Garden.Settings.Manage',
      'icon' => 'akismet.png',
      'key' => 'akismet',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.org/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.1',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'Akismet',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'akismetplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AkismetPlugin',
          'path' => '/class.akismet.plugin.php',
        ),
      ),
      'akismet' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'Akismet',
          'path' => '/class.akismet.php',
        ),
      ),
      'socketwriteread' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SocketWriteRead',
          'path' => '/class.socketwriteread.php',
        ),
      ),
    ),
     'subdir' => '/plugins/Akismet',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'AkismetPlugin',
    ),
  )),
  'twitter' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Twitter Social Connect',
      'description' => 'Users may sign into your site using their Twitter account.',
      'version' => '1.2',
      'mobileFriendly' => true,
      'settingsUrl' => '/dashboard/social/twitter',
      'settingsPermission' => 'Garden.Settings.Manage',
      'hasLocale' => true,
      'socialConnect' => true,
      'requiresRegistration' => true,
      'icon' => 'twitter_social_connect.png',
      'key' => 'twitter',
      'type' => 'addon',
      'documentationUrl' => 'https://docs.vanillaforums.com/help/sso/social-connect/#twitter',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.2',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'Twitter',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'twitterauthenticator' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TwitterAuthenticator',
          'path' => '/TwitterAuthenticator.php',
        ),
      ),
      'twitterplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'TwitterPlugin',
          'path' => '/class.twitter.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/Twitter',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'TwitterPlugin',
    ),
  )),
  'rich-editor' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Rich Editor',
      'description' => 'The new WYSIWYG editor for Vanilla. Easy to use, with support for rich content embedding. Also supports a more minimal text mode, Markdown, and BBCode.',
      'version' => '1.0.1',
      'mobileFriendly' => true,
      'hasLocale' => true,
      'icon' => 'rich_editor.png',
      'key' => 'rich-editor',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Adam Charron',
          'email' => 'adam.c@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.5',
        'dashboard' => '>= 2.6',
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'richeditorplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RichEditorPlugin',
          'path' => '/RichEditorPlugin.php',
        ),
      ),
      'richeditorstylescontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RichEditorStylesController',
          'path' => '/controllers/RichEditorStylesController.php',
        ),
      ),
      'richapicontroller' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RichApiController',
          'path' => '/controllers/api/RichApiController.php',
        ),
      ),
    ),
     'subdir' => '/plugins/rich-editor',
     'translations' => 
    array (
      'en' => 
      array (
        0 => '/locale/en.php',
      ),
    ),
     'special' => 
    array (
      'plugin' => 'RichEditorPlugin',
    ),
  )),
  'creativecleditor' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'CreativeCLEditor',
      'description' => 'Adds a <a href="http://premiumsoftware.net/cleditor/" target="_blank">WYSIWYG Editor</a> on discussions and comments.',
      'version' => '1.2.1',
      'pluginUrl' => 'http://www.creativedreams.eu/creative-cleditor',
      'requiredTheme' => false,
      'hasLocale' => false,
      'registerPermissions' => false,
      'settingsUrl' => false,
      'settingsPermission' => false,
      'key' => 'creativecleditor',
      'type' => 'addon',
      'priority' => 100,
      'oldType' => 'plugin',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Creative Dreams',
          'email' => 'sandro@creativedreams.eu',
          'homepage' => 'http://www.creativedreams.eu',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2',
      ),
      'Issues' => 
      array (
      ),
      'keyRaw' => 'CreativeCLEditor',
    ),
     'classes' => 
    array (
      'creativecleditorplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'CreativeCLEditorPlugin',
          'path' => '/class.creativecleditor.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/CreativeCLEditor',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'CreativeCLEditorPlugin',
    ),
  )),
  'googlesignin' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Google SignIn',
      'description' => 'Users may sign into your site using their Google account.',
      'version' => '1.0.0',
      'mobileFriendly' => true,
      'settingsUrl' => '/settings/googlesignin',
      'settingsPermission' => 'Garden.Settings.Manage',
      'hidden' => false,
      'socialConnect' => true,
      'requiresRegistration' => false,
      'icon' => 'google_signin.png',
      'key' => 'googlesignin',
      'type' => 'addon',
      'documentationUrl' => 'https://docs.vanillaforums.com/help/sso/social-connect/#google',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Support',
          'email' => 'support@vanillaforums.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.6',
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'googlesigninplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GoogleSignInPlugin',
          'path' => '/class.googlesignin.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/googlesignin',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'GoogleSignInPlugin',
    ),
  )),
  'maintenancemode' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Maintenance Mode',
      'description' => 'The original maintenance addon for Vanilla. Puts your Site into a maintenance state - so you can take care of modifications, backups, etc.',
      'version' => '3.3',
      'mobileFriendly' => true,
      'hasLocale' => true,
      'icon' => 'icon.png',
      'key' => 'maintenancemode',
      'type' => 'addon',
      'license' => 'GPL-3.0-only',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Oliver Raduner',
          'email' => 'vanilla@raduner.ch',
          'homepage' => 'https://raduner.ch/',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=3.0',
        'dashboard' => '>=3.0',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'MaintenanceMode',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'maintenancemodeplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'MaintenanceModePlugin',
          'path' => '/class.maintenance.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/MaintenanceMode',
     'translations' => 
    array (
      'de' => 
      array (
        0 => '/locale/de.php',
      ),
      'de_DE' => 
      array (
        0 => '/locale/de-DE.php',
      ),
      'nl_NL' => 
      array (
        0 => '/locale/nl-nl.php',
      ),
      'en' => 
      array (
        0 => '/locale/en.php',
        1 => '/locale/en-CA.php',
      ),
      'fr' => 
      array (
        0 => '/locale/fr.php',
      ),
      'en_US' => 
      array (
        0 => '/locale/en-US.php',
      ),
      'nl' => 
      array (
        0 => '/locale/nl.php',
      ),
      'fr_FR' => 
      array (
        0 => '/locale/fr-FR.php',
      ),
    ),
     'special' => 
    array (
      'plugin' => 'MaintenanceModePlugin',
    ),
  )),
  'vanillastats' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Vanilla Statistics',
      'description' => 'Adds helpful graphs and information about activity on your forum over time (new users, discussions, comments, and pageviews).',
      'version' => '2.0.7',
      'mobileFriendly' => true,
      'icon' => 'vanilla_stats.png',
      'key' => 'vanillastats',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Vanilla Staff',
          'email' => 'support@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.0.18',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'VanillaStats',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'vanillastatsplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaStatsPlugin',
          'path' => '/class.vanillastats.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/VanillaStats',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'VanillaStatsPlugin',
    ),
  )),
  'French' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'locale' => 'fr-FR',
      'name' => 'French Locale - Traduction française',
      'description' => 'Traduction française pour Vanilla 2.0.18.1',
      'version' => '2.0.18.1',
      'license' => 'Creative Commons - CC BY-SA 2.0',
      'key' => 'French',
      'type' => 'locale',
      'priority' => 11,
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Arachnos',
          'email' => 'arachnos@creative-tarentula.net',
          'homepage' => 'http://www.creative-tarentula.net',
        ),
      ),
      'Issues' => 
      array (
      ),
    ),
     'classes' => 
    array (
    ),
     'subdir' => '/plugins/French',
     'translations' => 
    array (
      'fr_FR' => 
      array (
        0 => '/definitions.php',
        1 => '/captured_admin.php',
        2 => '/captured.php',
      ),
    ),
     'special' => 
    array (
    ),
  )),
  'indexphotos' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Discussion Photos',
      'description' => 'Displays photo and name of the user who started each discussion in discussion listings on modern layouts. Note that this plugin will not have any affect when table layouts are enabled.',
      'version' => '1.2.2',
      'registerPermissions' => false,
      'mobileFriendly' => true,
      'icon' => 'discussion_photos.png',
      'key' => 'indexphotos',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Lincoln Russell',
          'email' => 'lincolnwebs@gmail.com',
          'homepage' => 'http://lincolnwebs.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.1',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'IndexPhotos',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'indexphotosplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'IndexPhotosPlugin',
          'path' => '/class.indexphotos.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/IndexPhotos',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'IndexPhotosPlugin',
    ),
  )),
  'necro' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Necro',
      'description' => 'Mark discussions raised from the dead.',
      'version' => '1.2',
      'license' => 'GPL-2.0-only',
      'key' => 'necro',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Lincoln Russell',
          'email' => 'lincolnwebs@gmail.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.2',
      ),
      'icon' => 'necro.png',
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'necroplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NecroPlugin',
          'path' => '/class.necro.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/necro',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'NecroPlugin',
    ),
  )),
  'heroimage' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'key' => 'heroimage',
      'name' => 'Hero Image',
      'description' => 'A plugin to add a hero image upload per category. The image is accessible through the Smarty tag `{hero_image_url}`. Supports a default image and inheritence from parents.',
      'version' => '1.0',
      'icon' => 'hero_image.png',
      'settingsUrl' => '/settings/heroimage',
      'settingsPermission' => 'Garden.Settings.Manage',
      'documentationUrl' => 'https://docs.vanillaforums.com/help/addons/hero-image',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Adam Charron',
          'email' => 'adam.c@vanillaforums.com',
        ),
      ),
      'license' => 'proprietary',
      'type' => 'addon',
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'heroimageplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'HeroImagePlugin',
          'path' => '/class.heroimage.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/heroimage',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'HeroImagePlugin',
    ),
  )),
  'oauth2' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'OAuth2 SSO',
      'className' => 'OAuth2Plugin',
      'description' => 'Connect to an authentication provider to allow users to log on using SSO.',
      'version' => '1.0.0',
      'settingsUrl' => '/settings/oauth2',
      'settingsPermission' => 'Garden.Settings.Manage',
      'mobileFriendly' => true,
      'icon' => 'oauth2.png',
      'key' => 'oauth2',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Patrick Kelly',
          'email' => 'patrick.k@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.2',
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'oauth2authenticator' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'OAuth2Authenticator',
          'path' => '/OAuth2Authenticator.php',
        ),
      ),
      'oauth2plugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'OAuth2Plugin',
          'path' => '/class.oauth2.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/oauth2',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'OAuth2Plugin',
    ),
  )),
  'flagging' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Flagging',
      'description' => 'Allows users to report content that violates forum rules.',
      'version' => '1.1.1',
      'requiredTheme' => false,
      'settingsUrl' => '/dashboard/plugin/flagging',
      'usePopupSettings' => false,
      'settingsPermission' => 'Garden.Moderation.Manage',
      'hasLocale' => true,
      'mobileFriendly' => true,
      'registerPermissions' => 
      array (
        0 => 'Plugins.Flagging.Notify',
      ),
      'icon' => 'flagging.png',
      'key' => 'flagging',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Tim Gunter',
          'email' => 'tim@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'Flagging',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'flaggingplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'FlaggingPlugin',
          'path' => '/class.flagging.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/Flagging',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'FlaggingPlugin',
    ),
  )),
  'vanillaconnect' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'VanillaConnect',
      'description' => 'VanillaConnect SSO.',
      'key' => 'vanillaconnect',
      'type' => 'addon',
      'version' => '1.0',
      'settingsUrl' => '/settings/vanillaconnect',
      'usePopupSettings' => false,
      'settingsPermission' => 'Garden.Settings.Manage',
      'hidden' => true,
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Alexandre (DaazKu) Chouinard',
          'email' => 'alexandre.c@vanillaforums.com',
          'homepage' => 'https://github.com/DaazKu',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.6',
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'vanillaconnectplugin' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\VanillaConnect\\',
          'className' => 'VanillaConnectPlugin',
          'path' => '/VanillaConnectPlugin.php',
        ),
      ),
      'vanillaconnectauthenticator' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\VanillaConnect\\',
          'className' => 'VanillaConnectAuthenticator',
          'path' => '/VanillaConnectAuthenticator.php',
        ),
      ),
    ),
     'subdir' => '/plugins/vanillaconnect',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'Vanilla\\VanillaConnect\\VanillaConnectPlugin',
    ),
  )),
  'googleprettify' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Syntax Prettifier',
      'description' => 'Adds pretty syntax highlighting to code in discussions and tab support to the comment box. This is a great addon for communities that support programmers and designers.',
      'version' => '1.2.3',
      'mobileFriendly' => true,
      'settingsUrl' => '/dashboard/settings/googleprettify',
      'settingsPermission' => 'Garden.Settings.Manage',
      'icon' => 'google-prettify.png',
      'key' => 'googleprettify',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.0.18',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'GooglePrettify',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'googleprettifyplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GooglePrettifyPlugin',
          'path' => '/class.googleprettify.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/GooglePrettify',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'GooglePrettifyPlugin',
    ),
  )),
  'allviewed' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'All Viewed',
      'description' => 'Allows users to mark all discussions as viewed and mark category viewed.',
      'version' => '2.2',
      'license' => 'GNU GPLv2',
      'mobileFriendly' => true,
      'icon' => 'all-viewed.png',
      'key' => 'allviewed',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Lincoln Russell',
          'email' => 'lincoln@vanillaforums.com',
          'homepage' => 'http://lincolnwebs.com',
        ),
        1 => 
        array (
          'name' => 'Oliver Chung',
          'email' => 'shoat@cs.washington.edu',
        ),
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'AllViewed',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'allviewedplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'AllViewedPlugin',
          'path' => '/class.allviewed.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/AllViewed',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'AllViewedPlugin',
    ),
  )),
  'friendships' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'description' => 'Allows users to being "friends" (send, receive and accept "friendship requests")',
      'version' => '1.0',
      'registerPermissions' => 
      array (
        0 => 'Plugins.Friendships.View',
        1 => 'Plugins.Friendships.Add',
        2 => 'Plugins.Friendships.Delete',
      ),
      'requiredTheme' => false,
      'hasLocale' => false,
      'mobileFriendly' => true,
      'settingsUrl' => false,
      'key' => 'friendships',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Alessandro Miliucci',
          'email' => 'lifeisfoo@gmail.com',
          'homepage' => 'http://forkwait.net',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=3.2',
      ),
      'license' => 'MIT',
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
      'keyRaw' => 'Friendships',
    ),
     'classes' => 
    array (
      'friendshipsplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'FriendshipsPlugin',
          'path' => '/class.friendships.plugin.php',
        ),
      ),
      'friendshipmodel' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'FriendshipModel',
          'path' => '/models/class.friendshipmodel.php',
        ),
      ),
      'friendshipsmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'FriendshipsModule',
          'path' => '/modules/class.friendshipsmodule.php',
        ),
      ),
    ),
     'subdir' => '/plugins/Friendships',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'FriendshipsPlugin',
    ),
  )),
  'profileextender' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Profile Extender',
      'description' => 'Add fields (like status, location, or gamer tags) to profiles and registration.',
      'version' => '3.0.2',
      'mobileFriendly' => true,
      'settingsUrl' => '/dashboard/settings/profileextender',
      'usePopupSettings' => false,
      'settingsPermission' => 'Garden.Settings.Manage',
      'icon' => 'profile-extender.png',
      'key' => 'profileextender',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Lincoln Russell',
          'email' => 'lincoln@vanillaforums.com',
          'homepage' => 'http://lincolnwebs.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.1',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'ProfileExtender',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'profileextenderplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'ProfileExtenderPlugin',
          'path' => '/class.profileextender.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/ProfileExtender',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'ProfileExtenderPlugin',
    ),
  )),
  'lastedited' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Last Edited',
      'description' => 'Appends "Post edited by [User] at [Time]" to the end of edited posts and links to change log.',
      'version' => '1.3',
      'mobileFriendly' => true,
      'hasLocale' => true,
      'registerPermissions' => false,
      'icon' => 'last-edited.png',
      'key' => 'lastedited',
      'type' => 'addon',
      'license' => 'GPL-2.0-only',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Tim Gunter',
          'email' => 'tim@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.1',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'LastEdited',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'lasteditedplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'LastEditedPlugin',
          'path' => '/class.lastedited.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/LastEdited',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'LastEditedPlugin',
    ),
  )),
  'googleplus' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Google+ Social Connect',
      'description' => 'This plugin is deprecated. <a href=\'https://support.google.com/plus/answer/9217723\'>Google is no longer supporting Google+ user authentication</a>. Please use the Google Sign In plugin.',
      'version' => '1.1.0',
      'mobileFriendly' => true,
      'settingsUrl' => '/dashboard/social/googleplus',
      'settingsPermission' => 'Garden.Settings.Manage',
      'hidden' => false,
      'socialConnect' => true,
      'requiresRegistration' => false,
      'icon' => 'google_social_connect.png',
      'key' => 'googleplus',
      'type' => 'addon',
      'documentationUrl' => 'https://docs.vanillaforums.com/help/sso/social-connect/#google-plus',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.2',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'GooglePlus',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'googleplusplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GooglePlusPlugin',
          'path' => '/class.googleplus.plugin.php',
        ),
      ),
      'googleplusauthenticator' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GooglePlusAuthenticator',
          'path' => '/GooglePlusAuthenticator.php',
        ),
      ),
    ),
     'subdir' => '/plugins/GooglePlus',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'GooglePlusPlugin',
    ),
  )),
  'registrationmessage' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Registration Message',
      'description' => 'Sends a configurable message to users immediately after registration.',
      'version' => '0.5',
      'mobileFriendly' => true,
      'settingsUrl' => 'settings/registrationmessage',
      'settingsPermission' => 'Garden.Settings.Manage',
      'license' => 'GNU GPL2',
      'gitHub' => 'bleistivt/registrationmessage',
      'key' => 'registrationmessage',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Bleistivt',
          'homepage' => 'http://bleistivt.net',
        ),
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'registrationmessageplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RegistrationMessagePlugin',
          'path' => '/class.registrationmessage.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/registrationmessage',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'RegistrationMessagePlugin',
    ),
  )),
  'facebook' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Facebook Social Connect',
      'description' => 'Users may sign into your site using their Facebook account and optionally share forum content there.',
      'version' => '1.2.0',
      'requiredTheme' => false,
      'mobileFriendly' => true,
      'settingsUrl' => '/dashboard/social/facebook',
      'settingsPermission' => 'Garden.Settings.Manage',
      'hasLocale' => true,
      'registerPermissions' => false,
      'socialConnect' => true,
      'requiresRegistration' => true,
      'icon' => 'facebook_social_connect.png',
      'key' => 'facebook',
      'type' => 'addon',
      'documentationUrl' => 'https://docs.vanillaforums.com/help/sso/social-connect/#facebook',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.2',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'Facebook',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'facebookauthenticator' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'FacebookAuthenticator',
          'path' => '/FacebookAuthenticator.php',
        ),
      ),
      'facebookplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'FacebookPlugin',
          'path' => '/class.facebook.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/Facebook',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'FacebookPlugin',
    ),
  )),
  'recaptcha' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'reCAPTCHA Support',
      'description' => 'Add recaptcha validation to signups.',
      'version' => '0.1',
      'mobileFriendly' => true,
      'icon' => 'recaptcha_support.png',
      'key' => 'recaptcha',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Tim Gunter',
          'email' => 'tim@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'recaptchaplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'RecaptchaPlugin',
          'path' => '/class.recaptcha.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/recaptcha',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'RecaptchaPlugin',
    ),
  )),
  'nativeemoji' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Native Emoji',
      'description' => 'Aliases for native emoji. Converts 😉 to :wink:.',
      'version' => '0.3',
      'mobileFriendly' => true,
      'license' => 'GNU GPL2',
      'gitHub' => 'bleistivt/nativeemoji',
      'key' => 'nativeemoji',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Bleistivt',
          'homepage' => 'http://bleistivt.net',
        ),
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'nativeemojiplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'NativeEmojiPlugin',
          'path' => '/class.nativeemoji.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/nativeemoji',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'NativeEmojiPlugin',
    ),
  )),
  'vanillainthisdiscussion' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'In This Discussion',
      'description' => 'Adds a list of users taking part in the discussion to the side panel of the discussion page in Vanilla.',
      'version' => '1',
      'settingsPermission' => 'Garden.Settings.Manage',
      'settingsUrl' => '/settings/inthisdiscussion',
      'icon' => 'in-this-discussion.png',
      'key' => 'vanillainthisdiscussion',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Mark O\'Sullivan',
          'email' => 'mark@vanillaforums.com',
          'homepage' => 'http://markosullivan.ca',
        ),
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'VanillaInThisDiscussion',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'vanillainthisdiscussionplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaInThisDiscussionPlugin',
          'path' => '/default.php',
        ),
      ),
      'inthisdiscussionmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'InThisDiscussionModule',
          'path' => '/class.inthisdiscussionmodule.php',
        ),
      ),
    ),
     'subdir' => '/plugins/VanillaInThisDiscussion',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'VanillaInThisDiscussionPlugin',
    ),
  )),
  'gallery' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Gallery',
      'description' => 'Allows users to add a simple image gallery to their profile',
      'version' => '0.1.3',
      'settingsPermission' => 'Garden.Settings.Manage',
      'settingsUrl' => '/dashboard/settings/gallery',
      'registerPermissions' => 
      array (
        0 => 'Plugins.Gallery.Add',
        1 => 'Plugins.Gallery.View',
        2 => 'Plugins.Gallery.Manage',
      ),
      'mobileFriendly' => true,
      'hasLocale' => true,
      'license' => 'MIT',
      'key' => 'gallery',
      'type' => 'addon',
      'priority' => 100,
      'oldType' => 'plugin',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Robin Jurinka',
          'homepage' => 'https://open.vanillaforums.com/profile/r_j',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>= 2.3',
      ),
      'Issues' => 
      array (
      ),
    ),
     'classes' => 
    array (
      'galleryplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GalleryPlugin',
          'path' => '/class.gallery.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/gallery',
     'translations' => 
    array (
      'de' => 
      array (
        0 => '/locale/de.php',
      ),
    ),
     'special' => 
    array (
      'plugin' => 'GalleryPlugin',
    ),
  )),
  'discordwidget' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Discord Widget',
      'description' => 'Creates a settings page to setup your Discord widget and adds it to your sidebar.',
      'version' => '1.0',
      'settingsUrl' => '/dashboard/settings/discordwidget',
      'settingsPermission' => 'Garden.Settings.Manage',
      'requiredTheme' => false,
      'mobileFriendly' => true,
      'registerPermissions' => 
      array (
        0 => 'Plugins.DiscordWidget.Add',
        1 => 'Plugins.DiscordWidget.Manage',
        2 => 'Plugins.DiscordWidget.Notify',
        3 => 'Plugins.DiscordWidget.View',
      ),
      'license' => 'MIT',
      'key' => 'discordwidget',
      'type' => 'addon',
      'priority' => 100,
      'oldType' => 'plugin',
      'authors' => 
      array (
        0 => 
        array (
          'name' => '<a href="http://yaypaul.com">YayPaul (Paul West)</a>',
          'homepage' => 'https://open.vanillaforums.com/profile/YayPaul',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.3',
      ),
      'Issues' => 
      array (
      ),
      'keyRaw' => 'DiscordWidget',
    ),
     'classes' => 
    array (
      'discordwidget' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscordWidget',
          'path' => '/class.discordwidget.plugin.php',
        ),
      ),
      'discordwidgetmodule' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DiscordWidgetModule',
          'path' => '/modules/class.discordwidgetmodule.php',
        ),
      ),
    ),
     'subdir' => '/plugins/DiscordWidget',
     'translations' => 
    array (
    ),
     'special' => 
    array (
    ),
  )),
  'swagger-ui' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'key' => 'swagger-ui',
      'name' => 'API v2 Docs',
      'description' => 'API v2 documentation customized for your community right in your dashboard.',
      'version' => '2.0',
      'license' => 'GPLv2',
      'type' => 'addon',
      'oldType' => 'plugin',
      'require' => 
      array (
        'Vanilla' => '^2.6',
      ),
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
        ),
      ),
      'icon' => 'swagger.png',
      'hidden' => true,
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'swaggeruiplugin' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\SwaggerUI\\',
          'className' => 'SwaggerUIPlugin',
          'path' => '/SwaggerUIPlugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/swagger-ui',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'Vanilla\\SwaggerUI\\SwaggerUIPlugin',
    ),
  )),
  'editor' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Advanced Editor',
      'description' => 'Enables advanced editing of posts in several formats, including WYSIWYG, simple HTML, Markdown, and BBCode.',
      'version' => '1.8.1',
      'mobileFriendly' => true,
      'registerPermissions' => 
      array (
        'Plugins.Attachments.Upload.Allow' => 'Garden.Profiles.Edit',
      ),
      'icon' => 'advanced-editor.png',
      'key' => 'editor',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Dane MacMillan',
          'homepage' => 'https://open.vanillaforums.com/profile/dane',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.2',
      ),
      'conflict' => 
      array (
        'buttonbar' => '*',
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'editorplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'EditorPlugin',
          'path' => '/class.editor.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/editor',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'EditorPlugin',
    ),
  )),
  'pockets' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Pockets',
      'description' => 'Administrators may add raw HTML to various places on the site. This plugin is very powerful, but can easily break your site if you make a mistake.',
      'version' => '1.4.1',
      'registerPermissions' => 
      array (
        'Plugins.Pockets.Manage' => 'Garden.Settings.Manage',
        0 => 'Garden.NoAds.Allow',
      ),
      'settingsUrl' => '/settings/pockets',
      'usePopupSettings' => false,
      'settingsPermission' => 'Plugins.Pockets.Manage',
      'mobileFriendly' => true,
      'hasLocale' => true,
      'license' => 'GPL-2.0-only',
      'icon' => 'pocket.png',
      'key' => 'pockets',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'http://vanillaforums.org/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.7',
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'pocketsplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'PocketsPlugin',
          'path' => '/PocketsPlugin.php',
        ),
      ),
      'pocket' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'Pocket',
          'path' => '/library/Pocket.php',
        ),
      ),
    ),
     'subdir' => '/plugins/pockets',
     'translations' => 
    array (
      'en' => 
      array (
        0 => '/locale/en.php',
      ),
    ),
     'special' => 
    array (
      'plugin' => 'PocketsPlugin',
    ),
  )),
  'stopforumspam' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Stop Forum Spam',
      'description' => 'Got spammer problems? This integrates the spammer blacklist from stopforumspam.com to mitigate the issue.',
      'version' => '1.0.1',
      'settingsUrl' => '/settings/stopforumspam',
      'icon' => 'stop_forum_spam.png',
      'key' => 'stopforumspam',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.0.18',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'StopForumSpam',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'stopforumspamplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'StopForumSpamPlugin',
          'path' => '/class.stopforumspam.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/StopForumSpam',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'StopForumSpamPlugin',
    ),
  )),
  'deletionreason' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Deletion Reason',
      'description' => 'Redirects moderators to the "New Message" screen after deleting a comment.',
      'version' => '1.0',
      '.settingsPermission' => 'Garden.Settings.Manage',
      '.settingsUrl' => 'settings/deletionreason',
      'hasLocale' => false,
      'mobileFriendly' => true,
      'license' => 'GNU GPL2',
      'gitHub' => 'bleistivt/deletionreason',
      'key' => 'deletionreason',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Bleistivt',
          'homepage' => 'http://bleistivt.net',
        ),
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'deletionreasonplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'DeletionReasonPlugin',
          'path' => '/class.deletionreason.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/deletionreason',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'DeletionReasonPlugin',
    ),
  )),
  'splitmerge' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Split / Merge',
      'description' => 'Allows moderators with discussion edit permission to split & merge discussions.',
      'version' => '1.2',
      'hasLocale' => true,
      'icon' => 'split-merge.png',
      'key' => 'splitmerge',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Mark O\'Sullivan',
          'email' => 'mark@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'SplitMerge',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'splitmergeplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'SplitMergePlugin',
          'path' => '/class.splitmerge.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/SplitMerge',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'SplitMergePlugin',
    ),
  )),
  'gravatar' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Gravatar',
      'description' => 'Implements Gravatar avatars for all users who have not uploaded their own custom profile picture & icon.',
      'version' => '1.5',
      'settingsUrl' => '/settings/gravatar',
      'icon' => 'gravatar.png',
      'mobileFriendly' => true,
      'key' => 'gravatar',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Mark O\'Sullivan',
          'email' => 'mark@vanillaforums.com',
          'homepage' => 'http://vanillaforums.com',
        ),
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'Gravatar',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'gravatarplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GravatarPlugin',
          'path' => '/default.php',
        ),
      ),
    ),
     'subdir' => '/plugins/Gravatar',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'GravatarPlugin',
    ),
  )),
  'quotes' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Quotes',
      'description' => 'Adds an option to each comment for users to easily quote each other.',
      'version' => '1.9',
      'mobileFriendly' => true,
      'hasLocale' => true,
      'icon' => 'quotes.png',
      'key' => 'quotes',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Tim Gunter',
          'email' => 'tim@vanillaforums.com',
          'homepage' => 'http://www.vanillaforums.com',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.1',
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'Quotes',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'quotesplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'QuotesPlugin',
          'path' => '/class.quotes.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/Quotes',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'QuotesPlugin',
    ),
  )),
  'vanillaseo' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Vanilla SEO',
      'description' => 'Vanilla SEO is your all in one plugin for optimizing your Vanilla forum for search engines.',
      'version' => '0.2.1',
      'hasLocale' => false,
      'settingsUrl' => '/dashboard/plugin/seo',
      'settingsPermission' => 'Garden.Settings.Manage',
      'key' => 'vanillaseo',
      'type' => 'addon',
      'priority' => 100,
      'oldType' => 'plugin',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Jamie Chung',
          'email' => 'me@jamiechung.me',
          'homepage' => 'http://www.jamiechung.me',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.0.18',
      ),
      'Issues' => 
      array (
      ),
      'keyRaw' => 'VanillaSEO',
    ),
     'classes' => 
    array (
      'vanillaseoplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanillaSEOPlugin',
          'path' => '/class.vanillaseo.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/VanillaSEO',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'VanillaSEOPlugin',
    ),
  )),
  'emojiextender' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Emoji Sets',
      'description' => 'Change your emoji set!',
      'version' => '1.1',
      'license' => 'GNU GPL2',
      'icon' => 'emoji_set.png',
      'settingsUrl' => '/settings/emojiextender',
      'mobileFriendly' => true,
      'key' => 'emojiextender',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Becky Van Bussel',
          'email' => 'rvanbussel@vanillaforums.com',
          'homepage' => 'http://vanillaforums.com',
        ),
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'emojiextenderplugin' => 
      array (
        0 => 
        array (
          'namespace' => 'Vanilla\\Addons\\EmojiExtender\\',
          'className' => 'EmojiExtenderPlugin',
          'path' => '/EmojiExtenderPlugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/emojiextender',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'Vanilla\\Addons\\EmojiExtender\\EmojiExtenderPlugin',
    ),
  )),
  'gettingstarted' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Getting Started',
      'description' => 'Adds a welcome message to the dashboard showing new administrators things they can do to get started using their forum. Checks off each item as it is completed.',
      'version' => '1',
      'hidden' => true,
      'key' => 'gettingstarted',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Mark O\'Sullivan',
          'email' => 'mark@vanillaforums.com',
          'homepage' => 'http://vanillaforums.com',
        ),
      ),
      'oldType' => 'plugin',
      'keyRaw' => 'GettingStarted',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'gettingstartedplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'GettingStartedPlugin',
          'path' => '/default.php',
        ),
      ),
    ),
     'subdir' => '/plugins/GettingStarted',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'GettingStartedPlugin',
    ),
  )),
  'vanillicon' => 
  Vanilla\Addon::__set_state(array(
     'info' => 
    array (
      'name' => 'Vanillicon',
      'description' => 'Provides fun default user icons from vanillicon.com.',
      'version' => '2.1.0',
      'mobileFriendly' => true,
      'settingsUrl' => '/settings/vanillicon',
      'settingsPermission' => 'Garden.Settings.Manage',
      'icon' => 'vanillicon.png',
      'key' => 'vanillicon',
      'type' => 'addon',
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Todd Burry',
          'email' => 'todd@vanillaforums.com',
          'homepage' => 'https://open.vanillaforums.com/profile/todd',
        ),
      ),
      'require' => 
      array (
        'vanilla' => '>=2.0.18',
      ),
      'oldType' => 'plugin',
      'Issues' => 
      array (
      ),
      'priority' => 100,
    ),
     'classes' => 
    array (
      'vanilliconplugin' => 
      array (
        0 => 
        array (
          'namespace' => '',
          'className' => 'VanilliconPlugin',
          'path' => '/class.vanillicon.plugin.php',
        ),
      ),
    ),
     'subdir' => '/plugins/vanillicon',
     'translations' => 
    array (
    ),
     'special' => 
    array (
      'plugin' => 'VanilliconPlugin',
    ),
  )),
);
