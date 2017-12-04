<?php
$servername = "localhost";
	$username = "cjohnson_qu5773o";
	$password = "12856076bc";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
