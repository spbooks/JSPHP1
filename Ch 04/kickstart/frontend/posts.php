<?php
require_once('includes/database.php');
class Blog{
	public $ksdb = '';
	public $base = '';
	public function __construct(){
		$this->ksdb = new Database;
		$this->base = new stdClass;
		$this->base->url = 'http://localhost/kickstart';

	}
}