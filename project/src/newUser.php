<?php session_start();
	include('assets/includes/header.php');
  if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'];
	}
?>
<a href="index.php" style="text-align: left;"><<< Back To Log In</a>
<table>
	<form action="login.php" method="post">
		<tr><td>First Name:</td><td><input type="text" name="fName" required/></td></tr>
		  <tr><td>Last Name:</td><td><input type="text" name="lName" required/></td></tr>
		  <tr><td>Email:</td><td><input type="email" name="email" value="<?php echo "$email"; ?>" required/></td></tr>
		  <tr><td>Password:</td><td><input type="password" name="passwd" /></td></tr>
		  <tr><td colspan="2"><input type="submit" class="button" class="button" value="Create" name="action" style="width:100%;" /></td></tr>
		</tr>
	</form>
</table>
<?php include('assets/includes/footer.php'); ?>
