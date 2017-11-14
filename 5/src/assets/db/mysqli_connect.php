<?php
$mysql_host=
DEFINE('DB_HOST', 'localhost');
$mysql_user=
DEFINE('DB_USER', 'cjohnson_qu5773o');
$mysql_password=
DEFINE('DB_PASSWORD', '12856076bc');
$mysql_database=
DEFINE('DB_NAME', 'cjohnson_qu5773oo');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME)
	  OR die ('Could not connect to the database server' . mysqli_connect_error());
