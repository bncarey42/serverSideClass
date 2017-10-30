<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="assets/favicon/favicon.gif">
	<title>Hello</title>
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<style>
		body{
			background-color: #282828;
			color: #ebdbb2;
    	font-family: 'Gloria Hallelujah', cursive;
			font-size: 200%;
		}
		p:hover{
			color: #b8bb26;
		}
	</style>
</head>
<body>
	<center>
		<?php
			$names = array('Shiela', 'Declan', 'Finton', 'Finbar', 'Molly');
			$greetings = array('Hello', 'Dia dhuit', 'Halò', 'Helo', 'Halló');
			$colors = array('#458588', '#fb4934', '#b16286', '#fabd2f');

			for($index = 0; $index < 5; $index++){
				echo "<p>$greetings[$index], $names[$index]!</p>";
			}
		?>
	</center>
</body>
</html>
