<?php session_start(); 
	include('assets/includes/header.html'); 
	$conn = mysqli_connect('localhost', 'cjohnson_qu5773o', '12856076bc', 'cjohnson_qu5773oo');
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$email=$_POST['uname'];
	$passwd=$_POST['passwd'];
	
	$uname = stripslashes($myusername);
	$passwd = stripslashes($mypassword);
	$uname = mysqli_real_escape_string($uame);
	$passwd = mysqli_real_escape_string($passwd);
	
	$r=mysqli_query($conn, 'SELECT USR_ID as id, USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=$uname, AND USR_PASSWORD=$passwd');
	
	if($r){
		if($row = mysql_fetch_assoc($result))
		{
			$_SESSION['uid'] = $row['id'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
		}
		header('location:profile.php');
	} else {
		$_SESSION['errMsg'] = "<p class=\'err\'>Incorrect Username or Password</p>";
		header('location:index.php');
	}
include('assets/includes/footer.html'); ?>