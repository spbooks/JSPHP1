<?php
	require_once('dog.php');
	class Rex extends Dog {
		public  $rexResponse = '';
		public function __construct(){
			parent::__construct();
			return $this->rexResponse = "Rex's Response: ";
		}
	}
