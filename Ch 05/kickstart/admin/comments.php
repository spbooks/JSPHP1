	<?php
	require_once('index.php');
	class Comments extends Adminpanel{
		public function __construct(){
			parent::__construct();
			if(!empty($_GET['action']) && $_GET['action'] == 'delete'){
				$this->deletecomment();
			}else{
				$this->listcomments();
			}
		}
		public function listcomments(){
			$comments = $this->ksdb->dbselect('comments', array('*'));
			require_once('templates/managecomments.php');
		}
		public function deletecomment(){
			if(!empty($_GET['id']) && is_numeric($_GET['id'])){
				$delete = $this->ksdb->dbdelete('comments', array('id' => $_GET['id']));
				if(!empty($delete) && $delete > 0){
					header("Location: http://localhost/kickstart/admin/comments.php?delete=success");
				}else{
					header("Location: http://localhost/kickstart/admin/comments.php?delete=error");
				}
			}
		}	
	}
	$admin_comments = new Comments;