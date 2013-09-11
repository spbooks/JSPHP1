<?php
	session_start();
	require_once('database.php');
	class Adminpanel{
		public function __construct(){
			$this->ksdb = new Database;
			$this->base = (object) '';
			$this->base->url = "http://".$_SERVER['SERVER_NAME'];
		}
	}

	class Posts extends Adminpanel{

		public function __construct(){
			parent::__construct();
			if(!empty($_GET['action'])){
				switch ($_GET['action']){
					case 'create':
						$this->addPost();
						break;
					default:
						$this->listPosts();
						break;
					case 'save':
						$this->savePost();
						break;
				}
			}else{
				$this->listPosts();
			}
		}

		public function listPosts(){
			//$posts = $this->ksdb->dbselect('posts', array('*'));
			$posts = $return = array();
			$query = $this->ksdb->db->prepare("SELECT * FROM posts");
			try {
				$query->execute();
				for($i=0; $row = $query->fetch(); $i++){
					$return[$i] = array();
					foreach($row as $key => $rowitem){
						$return[$i][$key] = $rowitem;
					}
				}
			}catch (PDOException $e) {
				echo $e->getMessage();
			}
			$posts = $return;
			require_once('templates/manageposts.php');
		}

		public function editPosts(){

		}

		public function addPost(){
			require_once('templates/newpost.php');
		}

		public function savePost(){
			$array = $format = $return = array();
			if(!empty($_POST['post'])){
				$post = $_POST['post'];
			}
			if(!empty($post['content'])){
				$array['content'] = $post['content'];
				$format[] = ':content'; 
			} 
			$cols = $values = '';
			$i=0;
			foreach($array as $col => $data){
				if($i==0){
					$cols .= $col;
					$values .= $format[$i];
				}else{
					$cols .= ','.$col;
					$values .= ','.$format[$i];
				}
				$i++;
			}
			try {
				$query = $this->ksdb->db->prepare("INSERT INTO posts(".$cols.") VALUES (".$values.")");
				for($c=0;$c<$i;$c++){
					$query->bindParam($format[$c], ${'var'.$c});
				}
				$z=0;
				foreach($array as $col => $data){
		 			${'var' . $z} = $data;
				    $z++;
				}
				$result = $query->execute();
				$add = $query->rowCount();
			}catch (PDOException $e) {
				echo $e->getMessage();
			}
			$query->closeCursor();
			$this->db = null;
			//$add = $this->ksdb->dbadd('posts', $array, $format);
			if(!empty($add)){
				$status = array('success' => 'Your post has been saved successfully.');
			}else{
				$status = array('error' => 'There has been an error saving your post. Please try again later.');
			}
			header("Location: http://localhost/kickstart/admin/posts.php");
			
		}

		public function deletePost(){
			
		}

	}

	class Comments extends Adminpanel{

		public function __construct(){
			parent::__construct();
		}

		public function listComments(){

		}

		public function deletePost(){
			
		}
		
	}

	$admin = new Adminpanel();