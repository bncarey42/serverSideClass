<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'];
		$_SESSION['errMsg'] = "<h3> </h3>";
	}
?>
	<form action='login.php' method='POST'>
		Email:<input type='email' name='uname'/>
		Password:<input type='password' name='passwd'/>
		<input type='submit' name='action' value='LogIn'/>
	</form>
  <p><a href="newUser.php">Click Here to create a new user</a></p>
<?php

include('assets/includes/footer.php');?>
