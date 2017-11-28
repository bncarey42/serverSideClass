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
	$sql="SELECT USR_ID, USR_FIRST_NAME, USR_LAST_NAME FROM cjohnson_qu5773oo.User WHERE USR_EMAIL='$email' USR_PASSWORD='$passwd'";
	$r=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($r);
	echo $row;
	if($r){
			$_SESSION['uid'] = $row['USR_ID'];
			$_SESSION['fname'] = $row['USR_FIRST_NAME'];
			$_SESSION['lname'] = $row['USR_LAST_NAME'];
			header('Location:profile.php');
	} else {
		$_SESSION['errMsg'] = "<p class=\'err\'>Incorrect Username or Password</p><p>$sql</p>";
		header('Location:index.php');
	}
?>
