<?php

class Database{

	public $dbserver = '';
	public $username = '';
	public $password = '';
	public $database = '';
	public $db = '';

	public function __construct(){
		$this->dbserver = 'xxx';
		$this->username = 'xxx';
		$this->database = 'xxx';
		$this->password = 'xxx';
		$this->db = new PDO("mysql:host=".$this->dbserver.";dbname=".$this->database, $this->username, $this->password);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

}