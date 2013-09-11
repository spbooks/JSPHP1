<?php 
mysql_connect("localhost", "admin", "admin") or die(mysql_error());
mysql_select_db("kickstartapp") or die(mysql_error());
mysql_query("CREATE TABLE users(id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),name VARCHAR(40), password VARCHAR(100), email VARCHAR(150)")or die(mysql_error()); 