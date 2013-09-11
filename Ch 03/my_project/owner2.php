<?php
	require_once('fido2.php');
	$dog = new Fido;
	echo $dog->fidoResponse.$dog->bark();