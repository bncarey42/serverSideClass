<?php	session_start();
	 $action=$_POST['action'];

		switch ($action) {
 		case 'LogIn':
			logIn('index.php');
			break;
 		case 'Create':
			$email=$_POST['uname'];
			$passwd=$_POST['passwd'];
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
 				logIn('newUser.php');
 			}
 			break;
 		default:
 				$_SESSION['errMsg'] = "<p class=\'err\'>Error logging in</p>";
 				header('Location:index.php');
 			break;
		}

	function logIn($originPage){
		$email=$_POST['uname'];
		$passwd=$_POST['passwd'];
		//select user from db
		require '../SQL_CONNECT.php';
		$sql="SELECT USR_ID as uid, USR_FIRST_NAME as fn, USR_LAST_NAME as ln FROM cjohnson_qu5773oo.User WHERE USR_EMAIL='$email' AND USR_PASSWORD='$passwd'";
		$_SESSION['msg'] = $sql;
		$r=mysqli_query($conn, $sql);
		if(mysqli_num_rows($r)>0){
			$row=mysqli_fetch_assoc($r);
			$_SESSION['uid'] = $row['uid'];
			$fname = $row['fn'];
			$lname = $row['ln'];
			$_SESSION['uname'] = "$fname $lname";

			header('Location:profile.php');
		} else {
			$_SESSION['errMsg'] = "<p class=\'err\'>Incorrect Username or Password</p><p>if you need to creat a New User <a href='newUser.php'>Click Here</a>.</p>";
			header('Location:'.$originPage);
		}
	}
?>
