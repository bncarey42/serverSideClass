<?php	session_start();
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$passwd=mysqli_real_escape_string($con,$_POST['passwd']);
	$action=$_POST['action'];

	switch ($action) {
		case 'Log In':
			//select user from db
			require '../SQL_CONNECT.php';
			$sql="SELECT USR_ID as uid, USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USR_EMAIL='$email' AND USR_PASSWORD='$passwd'";
			$r=mysqli_query($conn, $sql);
			if($r){
				$row=mysqli_fetch_assoc($r);
				$_SESSION['uid'] = $row['uid']+1;
				$fname = $row['fname'];
				$lname = $row['lname'];
				$_SESSION['uname'] = $fname." ".$lname;
				header('Location:profile.php');
			} else {
				$_SESSION['errMsg'] = "<p class=\'err\'>Incorrect Username or Password</p><p>if you need to creat a New User <a href='newUser.php'>Click Here</a>.</p>";
				header('Location:index.php');
			}
			mysqli_close($conn);
			break;

		case 'Create':
			$firstName=$_POST['fName'];
			$lastName=$_POST['lName'];
			//insert user
			require '../SQL_CONNECT.php';
			$sql="INSERT INTO cjohnson_qu5773oo.User(USR_FIRST_NAME, USR_LAST_NAME, USR_EMAIL, USR_PASSWORD) VALUES('$firstName', '$lastName', '$email', '$passwd')";
			$r=mysqli_query($conn, $sql);
			if($r){
				//select user from db
				require '../SQL_CONNECT.php';
				$sql="SELECT USR_ID as uid, USR_FIRST_NAME as fn, USR_LAST_NAME as ln FROM cjohnson_qu5773oo.User WHERE USR_EMAIL='$email' AND USR_PASSWORD='$passwd'";
				$r=mysqli_query($conn, $sql);
				if($r){
					$row=mysqli_fetch_assoc($r);
					$_SESSION['uid'] = $row['uid']+1;
					$fname = $row['fn'];
					$lname = $row['ln'];
					$_SESSION['uname'] = $fname." ".$lname;
					header('Location:profile.php');
				} else {
					$_SESSION['errMsg'] = "<p class=\'err\'>Error creating user</p>";
					header('Location:newUser.php');
				}
			}
			mysqli_close($conn);
			break;

		default:
			$_SESSION['errMsg'] = "<p class=\'err\'>Error logging in</p>";
			header('Location:index.php');
			break;
	}
?>

/*******************************************************************************************************
<?php	session_start();
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$passwd=mysqli_real_escape_string($con, $_POST['passwd']);
	$action=$_POST['action'];
	
	switch ($action) {
		case 'Log In':
			logIn('index.php');
			mysqli_free_result($r);
			break;
		case 'Create':
			$firstName=mysqli_real_escape_string($con, $_POST['fName']);
			$lastName=mysqli_real_escape_string($con, $_POST['lName']);
			//insert user
			require '../SQL_CONNECT.php';
			$sql="INSERT INTO cjohnson_qu5773oo.User(USR_FIRST_NAME, USR_LAST_NAME, USR_EMAIL, USR_PASSWORD) VALUES('$firstName', '$lastName', '$email', '$passwd')";
			$r=mysqli_query($conn, $sql);
			if($r){
				logIn('newUser.php');
			}
			break;
		default:
			$_SESSION['errMsg'] = "<p class=\'err\'>Error logging in</p>";
			header('Location:index.php');
			break;
	}
	mysql_close($conn);
	
	
	function logIn($originPage){
		//select user from db
		require '../SQL_CONNECT.php';
		$sql="SELECT USR_ID as uid, USR_FIRST_NAME as fn, USR_LAST_NAME as ln FROM cjohnson_qu5773oo.User WHERE USR_EMAIL='$email' AND USR_PASSWORD='$passwd'";
		$r=mysqli_query($conn, $sql);
		if($r){
			$row=mysqli_fetch_assoc($r);
			$_SESSION['uid'] = $row['uid']+1; //for whatever reason this subtracts one from the acctual userID...
			$fname = $row['fn'];
			$lname = $row['ln'];
			$_SESSION['uname'] = $fname." ".$lname;
			header('Location:profile.php');
		} else {
			$_SESSION['errMsg'] = "<p class=\'err\'>Error creating user</p>";
			header('Location:$originPage');
		}
		mysqli_free_result($r);
?>
*******************************************************************************************************/
