<?php
require_once('frontend/posts.php');
include_once('includes/Markdown.php');
require_once('frontend/comments.php');
class Posts extends Blog{

	public function __construct(){
		parent::__construct();
		$this->comments = new Comments();		
		if(!empty($_GET['id'])){
			$this->viewpost($_GET['id']);
		}else{
			$this->getposts();
		}
	}

	public function getposts(){
		$id = 0;
		$posts = array();
		$template = '';
		$posts = $this->ksdb->dbselect('posts', array('*'));
		foreach($posts as $key => $post){
			$posts[$key]['comments'] = $this->comments->commentnumber($post['id']);
		}
		$template = 'list-posts.php';
		include_once('frontend/templates/'.$template);
	}

	public function viewpost($postid){
		$id = $postid;
		$posts = $this->ksdb->dbselect('posts', array('*'),array('id' => $id));
		$markdown = new Michelf\Markdown();
		$posts[0]['content'] = $markdown->defaultTransform($posts[0]['content']);
		$postcomments = $this->comments->getcomments($posts[0]['id']);
		$template = 'view-post.php';
		include_once('frontend/templates/'.$template);
	}
}

$blog = new Posts;
