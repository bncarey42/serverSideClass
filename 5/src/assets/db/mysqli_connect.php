<?php
$mysql_host='localhost';
$mysql_user='cjohnson_qu5773o';
$mysql_password='12856076bc';
$mysql_database='cjohnson_qu5773oo';

$dbc = @mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database)
	  OR die ('Could not connect to the database server' . mysqli_connect_error());
