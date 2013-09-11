<?php
require_once('frontend/posts.php');
class Comments extends Blog{

	public function __construct(){
		parent::__construct();
		if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment'])){
			$this->addcomment();
		}
	}

	public function commentnumber($postid){
		$query = $this->ksdb->dbselect('comments', array('*'),array('postid' => $postid));
		$commentnum = count($query);
		if($commentnum <= 0){
			$commentnum = 0;
		}
		return $commentnum;
	}

	public function getcomments($postid){
		return $query = $this->ksdb->dbselect('comments', array('*'),array('postid' => $postid));
	}

	public function addcomment(){
		$status= '';
		$array = $format = array();
		if(!empty($_POST['comment'])){
			$comment = $_POST['comment'];
		}
		if(!empty($comment['fullname'])){
			$array['name'] = $comment['fullname'];
			$format[] = ':fullname'; 
		}
		if(!empty($comment['email'])){
			$array['email'] = $comment['email'];
			$format[] = ':email'; 
		}
		if(!empty($comment['context'])){
			$array['comment'] = $comment['context'];
			$format[] = ':context'; 
		}
		if(!empty($comment['postid'])){
			$array['postid'] = $comment['postid'];
			$format[] = ':postid'; 
		}
		$add = $this->ksdb->dbadd('comments', $array, $format);
		if(!empty($add) && $add > 0){
			$status = array('success' => 'Your comment has been submitted');
			$key = 'success';
		}else{
			$status = array('error' => 'There has been an error submitting your comment. Please try again later.');
			$key = 'error';
		}
		header('http://localhost/kickstart/?id='.$comment['postid']);
	}

}