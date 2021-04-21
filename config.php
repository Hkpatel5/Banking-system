<?php

	$servername = "localhost";
	$username = "id16655817_hkpatel";
	$password = "Hkpatel123-45";
	$dbname = "id16655817_harsh_patel";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>