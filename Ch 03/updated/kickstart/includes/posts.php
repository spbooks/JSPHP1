<?php

require_once('database.php');

class Blog{
	public $ksdb = '';
	public $base = '';
	public function __construct(){
		$this->ksdb = new Database;
		$this->base = new stdClass;
		$this->base->url = "http://".$_SERVER['SERVER_NAME'];

	}
}

class Posts extends Blog{

	public function __construct(){
		parent::__construct();
	}

	public function getPosts(){

	}

	public function viewPost($postId){

	}
}

class Comments extends Blog{

	public function __construct(){
		parent::__construct();
	}


	public function commentNumber($postId){

	}

	public function getComments($postId){
		
	}

	public function addComment(){
		
	}

}