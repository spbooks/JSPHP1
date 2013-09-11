<?php
	session_start();
	require_once('../includes/database.php');
	class Adminpanel{
		public function __construct(){
			$this->ksdb = new Database;
			$this->base = (object) '';
			$this->base->url = 'http://localhost/kickstart/admin';
		}
	}

	$admin = new Adminpanel();