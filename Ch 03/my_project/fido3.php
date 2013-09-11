<?php
	require_once('dog.php');
	class Fido extends Dog {
		public $fidoResponse = '';
		public function __construct(){
			parent::__construct();
			return $this->fidoResponse = "Fido's Response: ";
		}
		public function fidoMoveBall(){
			return $this->fidoResponse."moving ball else where"; 
		}
	}
