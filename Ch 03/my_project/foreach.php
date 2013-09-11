<?php
	$myArray = array( 'key1' => 'value1', 'key2', => 'value2');
	foreach($myArray as $key => $value){
		echo $key.' - '.$value;
	}

	$myArray = array( 
		'key1' => array(
			'level1key1subkey1' => 'value1level1subkey1',
			 'level1key2subkey1' => 'value2level1subkey1'
		),
		 'key2', => array(
			'level1key1subkey2' => 'value1level1'subkey2, 
			'level1key2subkey2' => 'value2level2subkey2'
		)
	)

	$myArray = array( 
		'key1' => array(
			'level1key1subkey1' => 'value1level1subkey1',
			 'level1key2subkey1' => 'value2level1subkey1'
		),
		 'key2', => array(
			'level1key1subkey2' => 'value1level1'subkey2, 
			'level1key2subkey2' => 'value2level2subkey2'
		)
	)
	foreach($myArray as $key => $value){
		foreach($value as $subkey => $subvalue){
			echo $subkey.' - '.$subvalue;
		}
		echo $sub' - '.$value;
	}