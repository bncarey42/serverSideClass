<?php	session_start();
	$email=$_POST['email'];
	$passwd=$_POST['passwd'];

	$action=$_POST['action'];


	switch ($action) {
		case 'Log In':
			logIn();
			break;

		case 'Create':
			$firstName=$_POST['fName'];
			$lastName=$_POST['lName'];
			//insert user
			require '../SQL_CONNECT.php';
			$sql="INSERT INTO cjohnson_qu5773oo.User(USR_FIRST_NAME, USR_LAST_NAME, USR_EMAIL, USR_PASSWORD) VALUES('$firstName', '$lastName', '$email', '$passwd')";
			$r=mysqli_query($conn, $sql);
			if($r){
				logIn();
				header('Location:profile.php');
			} else {
				$_SESSION['errMsg'] = "<p class=\'err\'>Error creating user</p><p>$sql</p>";
				header('Location:newUser.php');
			}
			break;
		default:
				$_SESSION['errMsg'] = "<p class=\'err\'>Error logging in</p>";
				header('Location:index.php');
			break;
	}


function logIn(){
	//select user from db
	require '../SQL_CONNECT.php';
	$sql="SELECT USR_ID as uid, USR_FIRST_NAME as fn, USR_LAST_NAME as ln FROM cjohnson_qu5773oo.User WHERE USR_EMAIL='$email' AND USR_PASSWORD='$passwd'";
	$r=mysqli_query($conn, $sql);
	if($r){
		$row=mysqli_fetch_assoc($r);
		$_SESSION['uid'] = $row['uid'];
		$fname = $row['fn'];
		$lname = $row['ln'];
		$_SESSION['uname'] = "$fName $lname";
		header('Location:profile.php');
	} else {
		$_SESSION['errMsg'] = "<p class=\'err\'>Incorrect Username or Password</p><p>if you need to creat a New User <a href='newUser.php'>Click Here</a>.</p>";
		header('Location:index.php');
	}
}
?>
