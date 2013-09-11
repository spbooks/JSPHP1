<?php
	require_once('index.php');
	class Posts extends Adminpanel{

		public function __construct(){
			parent::__construct();
			if(!empty($_GET['action'])){
				switch ($_GET['action']){
					case 'create':
						$this->addpost();
						break;
					default:
						$this->listposts();
						break;
					case 'save':
						$this->savepost();
						break;
				}
			}else{
				$this->listposts();
			}
		}

		public function listposts(){
			$posts = $this->ksdb->dbselect('posts', array('*'));
			require_once('templates/manageposts.php');
		}

		public function editposts(){

		}

		public function addpost(){
			require_once('templates/newpost.php');
		}

		public function savepost(){
			$array = $format = array();
			if(!empty($_POST['post'])){
				$post = $_POST['post'];
			}
			if(!empty($post['content'])){
				$array['content'] = $post['content'];
				$format[] = ':content'; 
			} 
			$add = $this->ksdb->dbadd('posts', $array, $format);
			if(!empty($add)){
				$status = array('success' => 'Your post has been saved successfully.');
			}else{
				$status = array('error' => 'There has been an error saving your post. Please try again later.');
			}
			header("Location: http://localhost/kickstart/admin/posts.php");
			
		}

		public function deletepost(){
			
		}

	}

	$admin_posts = new Posts;