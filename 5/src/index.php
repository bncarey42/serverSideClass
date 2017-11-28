<?php session_start();
	include('assets/includes/header.html');
	if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'];
	}
?>
	<form action='login.php' method='POST'>
		Email:<input type='email' name='uname'/>
		Password:<input type='password' name='passwd'/>
		<input type='submit' value='LogIn'/>
	</form>
  <p><a href="createUser.php">Click Here to create a new user</a></p>
<?php include('assets/includes/footer.html');
?>
