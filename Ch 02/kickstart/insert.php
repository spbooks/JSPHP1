<?php
	$db = new PDO("mysql:host=localhost;dbname=kickstartapp", "USERNAME", "PASSWORD");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
  	$query = "INSERT INTO example(INSERTusername, password, email) VALUES('admin', MD5('admin'), 'youremail@domain.com' )";
		$result = $db->query($query);
	}catch (PDOException $e) {
    echo $e->getMessage();
	}