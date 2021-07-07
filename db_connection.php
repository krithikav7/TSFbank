<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "tsfbank";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

	if(!$conn){
		die("Connect_error--> ".mysqli_connect_error());
	}

?>