<?php
	$userName = "Jack";

	if($userName == "Jack"){
		echo "Hello Jack, how are you today?";
	}

	if($userName == "Jill"){
		echo "Hello Jill, how are you today?";
	}else{
		echo "Hello Stranger, who are you?";
	}

	$userName = "Jack";
	if($userName == "Jack"){
		echo "Hello Jack, how are you today?";
	}else if($userName == "Jill"){
		echo "Hello Jill, how are you today?";
	}else{
		echo "Hello Stranger, who are you?";
	}