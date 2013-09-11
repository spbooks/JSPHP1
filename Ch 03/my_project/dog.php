<?php
	require_once('fido3.php');
	require_once('rex.php');
	class Dog {
		public function __construct(){
		}
		public function bark(){
			return "Woof! Woof!";
		}
		public function dogFetch(){
			return "fetching ball...ball fetched";
		}
		public function dogCome(){
			return "returning to owner";
		}
	}