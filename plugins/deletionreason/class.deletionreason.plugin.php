<?php

class DeletionReasonPlugin extends Gdn_Plugin {

    // For JS users.
    public function commentModel_beforeDeleteComment_handler($sender, $args) {
        // Are we not the author?
        if ($args['Comment']['InsertUserID'] === Gdn::session()->UserID) {
            return;
        }

        $user = Gdn::userModel()->getID($args['Comment']['InsertUserID']);

        Gdn::controller()->jsonTarget('', url('/messages/add/'.rawurlencode($user->Name)), 'Redirect');
    }


    // For non-JS users.
    public function base_commentOptions_handler($sender) {
        $args = &$sender->EventArguments;

        // Do we have the option to delete the comment?
        if (!isset($args['CommentOptions']['DeleteComment'])) {
            return;
        }

        // Are we not the author?
        if ($args['Comment']->InsertUserID === Gdn::session()->UserID) {
            return;
        }

        $url = $args['CommentOptions']['DeleteComment']['Url'];

        // Is there a query string already? Remove it (it redirects to /discussion/x anyway).
        if (strpos($url, '?')) {
            $url = substr($url, 0, strpos($url, '?') - 1);
        }

        // Add the message/add/$username url.
        $args['CommentOptions']['DeleteComment']['Url'] = $url.'?Target='.rawurlencode(url(
            '/messages/add/'.rawurlencode($args['Comment']->InsertName)
        ));
    }

}
