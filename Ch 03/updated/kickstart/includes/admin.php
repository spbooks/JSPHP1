<?php
	session_start();
	require_once('database.php');
	class Adminpanel{
		public function __construct(){
		}
	}

	class Posts extends Adminpanel{

		public function __construct(){
			parent::__construct();
		}

		public function listPosts(){

		}

		public function editPosts(){

		}

		public function addPost(){
		}

		public function savePost(){

			
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