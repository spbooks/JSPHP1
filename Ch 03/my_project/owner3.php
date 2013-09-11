<?php
	require_once('fido.php');
	require_once('rex.php');
	$dog = new Dog;
	$fido = new Fido;
	$rex = new Rex;

	echo $fido->fidoResponse.$fido->dogFetch().'<br/><br/>';
	echo $fido->fidoResponse.$fido->fidoMoveBall().'<br/><br/>';
	echo $rex->rexResponse.$rex->dogFetch().'<br/><br/>';
	echo $rex->rexResponse.$rex->dogCome().'<br/><br/>';
	echo $fido->fidoResponse.$fido->dogCome().'<br/><br/>';