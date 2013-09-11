<?php
	require_once('includes/database.php');
	class Login{

		public $ksdb = '';
		public $base = '';

		public function __construct(){
			$this->ksdb = new Database;
			$this->base = (object) '';
			$this->base->url = 'http://localhost/kickstart';
			$this->index();
		}

		public function index(){
			if($_SERVER['REQUEST_METHOD'] === 'POST'){
				$this->validatedetails();
			}else if(!empty($_GET['status'])){
				if($_GET['status'] == 'inactive'){
					$error = 'You have been logged out due to inactivity. Please login again.';
				}
			}
			require_once('admin/templates/loginform.php');
		}

		public function loginsuccess(){
			header('Location: http://localhost/kickstart/admin/posts.php');
			return;
		}

		public function loginfail(){
			return 'Your Username/Password was incorrect';
		}

		private function validatedetails(){
			print_r($_POST);
			if(!empty($_POST['username']) && !empty($_POST['password'])){
				$salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
				$password = crypt($_POST['password'], $salt);
				$login = $this->ksdb->dbselect('users', array('*'),array('username' => $_POST['username'], 'password' => $password));
				if(!empty($login) && is_array($login) && !empty($login[0])){
					$this->loginsuccess();
				}else{
					echo $error = $this->loginfail();
				}
			}
		}

	}

	$login = new Login();