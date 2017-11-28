<?php session_start();
	$email=$_POST['uname'];
	$passwd=$_POST['passwd'];

	$servername = "localhost";
	$username = "cjohnson_qu5773o";
	$password = "12856076bc";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

	$sql="SELECT USR_ID as id, USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USR_EMAIL='$email' USR_PASSWORD='$passwd'";
	$r=mysqli_query($conn, $sql);

	if($r){
			$row = mysql_fetch_assoc($r);
			$_SESSION['uid'] = $row['id'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
			header('Location:profile.php');
	} else {
		$_SESSION['errMsg'] = "<p class=\'err\'>Incorrect Username or Password</p><p>$sql</p>";
		header('Location:index.php');
	}
include('assets/includes/footer.html'); ?>
