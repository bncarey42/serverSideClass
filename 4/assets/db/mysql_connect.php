<?php
$host="192.185.225.1";
$port=3306;
$socket="";
$user="cjohnson_qu5773o";
$password="12856076bc";
$dbname="cjohnson_qu5773oo";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
?>
