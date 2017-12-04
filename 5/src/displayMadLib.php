<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
	}
?>
<h2>MadLib</h2>
<p>
  <?php echo $_SESSION['madLib'];?>
  <a href="profile.php">Return to Profile</a>
</p>
<?php include('assets/includes/footer.php');?>
