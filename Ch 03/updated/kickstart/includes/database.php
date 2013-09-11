<?php

class Database{

	public $dbserver = '';
	public $username = '';
	public $password = '';
	public $database = '';
	public $db = '';

	public function __construct(){
		$this->dbserver = 'localhost';
		$this->username = 'xxx';
		$this->password = 'xxx';
		$this->database = 'xxx';
		$this->db = new PDO("mysql:host=".$this->dbserver.";dbname=".$this->database, $this->username, $this->password);
	}

	public function dbselect($table, $select, $where=NULL){

	}

	public function dbadd($tablename, $insert, $format){

	}

	public function dbupdate($tablename, $insert, $where){

	}

}