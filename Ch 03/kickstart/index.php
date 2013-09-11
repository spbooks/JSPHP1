<?php
require_once('frontend/posts.php');
require_once('frontend/comments.php');
class Posts extends Blog{

	public function __construct(){
		parent::__construct();
	}

	public function getposts(){

	}

	public function viewpost($postid){

	}
}

$blog = new Posts;