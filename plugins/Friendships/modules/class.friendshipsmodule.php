<?php if (!defined('APPLICATION')) exit();
/**
* Renders a list of friends or show a "Request friendship" button
*/
class FriendshipsModule extends Gdn_Module {

	protected $_Friends;
	protected $_FriendshipModel;

	public function __construct($Sender = '') {
		parent::__construct($Sender);
		$this->_FriendshipModel = new FriendshipModel();
	}

	public function AssetTarget() {
		return 'Panel';
	}

	private function _RequestLink($UserID) {
		return Anchor(
			Gdn::Translate('Request friendship'),
			"/plugin/Friendships/RequestFriendship/".$UserID,
			"Button Friendship RequestFriendship Hijack"
		);
	}

	private function _ConfirmLinkWhitName($Friendship) {
		return Anchor(
			sprintf(Gdn::Translate('Confirm %1$s friendship'), $Friendship->RequestedByName),
			"/plugin/Friendships/ConfirmFriendship/".$Friendship->RequestedBy."/".$Friendship->RequestedTo,
			"Button Friendship ConfirmFriendship Hijack"
		);
	}

	private function _ConfirmLink($UserID) {
		return Anchor(
			Gdn::Translate('Confirm friendship'),
			"/plugin/Friendships/ConfirmFriendship/".$UserID,
			"Button Friendship ConfirmFriendship Hijack"
		);
	}

	private function _DeleteLink($UserID, $Text) {
		return Anchor(
			Gdn::Translate($Text),
			"/plugin/Friendships/DeleteFriendship/".$UserID,
			"Button Friendship DeleteFriendship Hijack"
		);
	}

	public function FriendsList($UserID) {
		$Friends = $this->_FriendshipModel->Friends($UserID);
		$Return = '';
		if(sizeof($Friends) > 0) {
			$Return .= '<div class="FriendsList"><h5>' . T('Friends list') . '</h5>';
			$Return .= '<div class="Avatars">';
			foreach ($Friends as $Friend) {
				$Return .= UserPhoto($Friend);
			}
			$Return .= '</div></div>';
		}
		return $Return;
	}

	private function _ReceivedFriendshipRequests() {
		$Return = '';
		$PendingRequests = $this->_FriendshipModel->ReceivedPendingRequests(Gdn::Session()->UserID);
		if(sizeof($PendingRequests) > 0) {
			$Return .= '<h5>' . T('Pending requests') . '</h5>';
			$Return .= '<ul class="FriendshipRequests">';
			foreach ($PendingRequests as $Friendship) {
				$Return .= $this->_ConfirmLinkWhitName($Friendship);
			}
			$Return .= '</ul>';
		}
		return $Return;
	}

	public function RequestFriendshipButton($UserID) {
		return $this->_RequestLink($UserID);
	}

	private function _DeleteFriendshipButton($UserID) {
		return $this->_DeleteLink($UserID, 'Delete friendship');
	}

	public function DeleteFriendshipRequestButton($UserID) {
		return $this->_DeleteLink($UserID, 'Delete friendship request');
	}

	private function _ConfirmFriendshipButton($UserID) {
		return $this->_ConfirmLink($UserID);
	}


	public function ToString() {
		if($this->_Sender instanceof ProfileController) {
			if(CheckPermission('Plugins.Friendships.View')){
				$ProfileOwnerID = $this->_Sender->User->UserID;
				$String = '<div class="Box FriendshipsBox">';
				$String .= '<h4>' . T('Friendships') . '</h4>';
				if(Gdn::Session()->IsValid()){ //a logged user
					$SessionUserID = Gdn::Session()->UserID;
					//check if current user is on his page -> shows only his friend
					if($ProfileOwnerID == $SessionUserID){
						//this is my profile page (AND obviously I'm NOT a guest)
						$String .= $this->_ReceivedFriendshipRequests();
					}else{
						//this is NOT my profile page
						//Check if a friendship exists or a friendship request exist: 'request' or 'confirm'
						if($this->_FriendshipModel->FriendsFrom($SessionUserID, $ProfileOwnerID)){
							if(CheckPermission('Plugins.Friendships.Delete')){
								$String .= $this->_DeleteFriendshipButton($ProfileOwnerID);
							}
						}elseif($this->_FriendshipModel->Get($SessionUserID, $ProfileOwnerID)){
							$Out = $this->_FriendshipModel->GetAbsolute($SessionUserID, $ProfileOwnerID);
							$In = $this->_FriendshipModel->GetAbsolute($ProfileOwnerID, $SessionUserID);
							if($Out){ //is a friendship request from me
								$String .= $this->DeleteFriendshipRequestButton($Out->RequestedTo);
							}else{ //is an incoming friendship request
								$String .= $this->_ConfirmFriendshipButton($In->RequestedBy);
							}
						}else{ //show the "Request friendship" button
							if(CheckPermission('Plugins.Friendships.Add')){
								$String .= $this->RequestFriendshipButton($ProfileOwnerID);
							}
						}
					}
					$String .= $this->FriendsList($ProfileOwnerID);
				}else{//I'm guest -> I can have only view permission (internal vanilla security rule)
					//show friends list
					$String .= $this->FriendsList($ProfileOwnerID);
				}
				$String .= '</div>';
				return $String;
			}
		}
	}
}