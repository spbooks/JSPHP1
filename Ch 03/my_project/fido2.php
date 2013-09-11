<?php
	class Fido {
		public $fidoResponse = "";
		public function __construct(){
			$this->fidoResponse = "Fido's Response: ";
		}
		public function bark(){
			return "Woof! Woof!";
		}
	}