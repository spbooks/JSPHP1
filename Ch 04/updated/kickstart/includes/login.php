<?php
	require_once('database.php');
	class Login{

		public $ksdb = '';
		public $base = '';

		public function __construct(){
			$this->ksdb = new Database;
			$this->base = (object) '';
			$this->base->url = "http://".$_SERVER['SERVER_NAME'];
			$this->index();
		}

		public function index(){
			if($_SERVER['REQUEST_METHOD'] === 'POST'){
				$this->validateDetails();
			}else if(!empty($_GET['status'])){
				if($_GET['status'] == 'inactive'){
					$error = 'You have been logged out due to inactivity. Please login again.';
				}
			}
			require_once('admin/templates/loginform.php');
		}

		public function loginSuccess(){
			header('Location: http://'.$_SERVER['SERVER_NAME'].'/admin/posts.php');
			return;
		}

		public function loginFail(){
			return 'Your Username/Password was incorrect';
		}

		private function validateDetails(){
			if(!empty($_POST['username']) && !empty($_POST['password'])){
				$salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
				$password = crypt($_POST['password'], $salt);
				$return = array();
				$query = $this->ksdb->db->prepare("SELECT * FROM users WHERE username = '".$_POST['username']."' AND password = '".$password."'");
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
				$login = $return;
				//$login = $this->ksdb->dbselect('users', array('*'),array('username' => $_POST['username'], 'password' => $password));
				if(!empty($login) && is_array($login) && !empty($login[0])){
					$this->loginSuccess();
				}else{
					echo $error = $this->loginFail();
				}
			}
		}

	}