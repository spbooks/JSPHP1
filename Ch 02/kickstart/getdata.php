<?php
	$db = new PDO("mysql:host=localhost;dbname=kickstartapp", "USERNAME", "PASSWORD");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	try {
		$query = $db->prepare("SELECT * FROM users");
		$query->execute();
		for($i=0; $row = $query->fetch(); $i++){
			echo $row['id'].' - '.$row['name'].' - '.$row['email'].' - '.$row['password'];
			echo "<br/>";
		}
	}catch (PDOException $e) {
    echo $e->getMessage();
	}
	$query->closeCursor();
	$db = null;