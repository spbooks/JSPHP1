<?php

class Database{

	public $dbserver = '';
	public $username = '';
	public $password = '';
	public $database = '';
	public $db = '';

	public function __construct(){
		$this->dbserver = 'localhost';
		$this->username = 'kickstart';
		$this->database = 'kickstart';
		$this->password = 'i8vfbxdb';
		$this->db = new PDO("mysql:host=".$this->dbserver.";dbname=".$this->database, $this->username, $this->password);
	}

	public function dbselect($table, $select, $where=NULL){
		$cols = $cond = '';
		$return = array();
		$i=0;
		foreach($select as $col => $data){
			if($i==0){
				$cols .= $data;
			}else{
				$cols .= ','.$data;
			}
			$i++;
		}
		$i=0;
		if($where){
			foreach($where as $col => $data){
				if($i==0){
					$cond .= $col." = '".$data."'";
				}else{
					$cond .= " AND ".$col." = '".$data."'";
				}
				$i++;
			}
			$query = $this->db->prepare("SELECT ".$cols." FROM ".$table." WHERE ".$cond);
		}else{
			$query = $this->db->prepare("SELECT ".$cols." FROM ".$table);
		}
		try {
			$query->execute();
			for($i=0; $row = $query->fetch(); $i++){
				$return[$i] = array();
				foreach($row as $key => $rowitem){
					$return[$i][$key] = $rowitem;
				}
			}
		}catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $return;
		$result->closeCursor();
		$this->db = null;
	}

	public function dbadd($tablename, $insert, $format){
		$cols = $values = '';
		$i=0;
		foreach($insert as $col => $data){
			if($i==0){
				$cols .= $col;
				$values .= $format[$i];
			}else{
				$cols .= ','.$col;
				$values .= ','.$format[$i];
			}
			$i++;
		}
		$query = $this->db->prepare("INSERT INTO ".$tablename."(".$cols.") VALUES (".$values.")");
		for($c=0;$c<$i;$c++){
			$query->bindParam($format[$c], ${'var'.$c});
		}
		$z=0;
		foreach($insert as $col => $data){
 			${'var' . $z} = $data;
		    return $query->execute();
		    $z++;
		}
		$query->closeCursor();
		$this->db = null;
	}

	public function dbupdate($tablename, $insert, $where){
		$cols = '';
		$values = array();
		$i=0;
		foreach($insert as $col => $data){
			if($i==0){
				$cols .= "`".$col."`='".$data."'";
			}else{
				$cols .= ",`".$col."`='".$data."'";
			}
			$i++;
		}
		$c=0;
		foreach($where as $col => $value){
			if($c==0){
				$cond = $col.'='.$value;
			}else{
				$cond = " AND ".$col.'='.$value;
			}
		}
		$query = "UPDATE `".$tablename."` SET ".$cols." WHERE ".$cond;
		$result = $this->db->query($query);
		$result->closeCursor();
		$this->db = null;
	}

}