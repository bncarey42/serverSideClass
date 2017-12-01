<?php session_start();
	include('assets/includes/header.php');
  if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'];
	}
?>
<form action="login.php" method="post">
  First Name:<input type="text" name="fName" required/>
  Last Name:<input type="text" name="lName" required/>
  Email:<input type="email" name="email" value="<?php echo "$email"; ?>" required/>
  Password<input type="password" name="passwd" />
  <input type="submit" class="button" class="button" value="Create" name="action" />
</form>
<?php include('assets/includes/footer.php'); ?>
