<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="assets/favicon/favicon.gif">
	<title>Website for Ben Carey - CSCI 2442</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<style>
		body{
			background-color: #282828;
			color: #ebdbb2;
			font-family: 'Ubuntu', sans-serif;
		}
		h1{
			color: #689d6a;
		}
		a{
			color: #ebdbb2;
		}
		a:hover{
			color: #458588;
		}
	</style>
</head>
<body>
	<center>
		<?php
			// Homework #1 - CSCI 2442
			// by Ben Carey
			$firstname = "Ben";
			$lastname = "Carey";
			echo "<h1>Welcome to the homepage of $firstname $lastname </h1>";
		?>
		<p style="text-align: center" title="This is Ben"><img src="assets/photos/photo.png" alt="This is Ben" /></p>
		<p style="text-align: center"><a href="http://www.php.net">PHP Documentation</a></p>
	</center>
</body>
</html>
