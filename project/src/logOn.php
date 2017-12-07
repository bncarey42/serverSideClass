<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'];
		$_SESSION['errMsg'] = "<h3> </h3>";
	}
?>
<table>
	<form action='login.php' method='POST'>
		<tr><td>Email:</td><td><input type='email' name='uname'/></td></tr>
		<tr><td>Password:</td><td><input type='password' name='passwd'/></td></tr>
		<tr><td></td><td><input type='submit' class='button' name='action' value='LogIn'/></td></tr>
	</form>
  <tr style="text-aline: center;"><td colspan=2><p><a href="newUser.php">Click Here to create a new user</a></p></td></tr>
</table>

<?php include('assets/includes/footer.php');?>
