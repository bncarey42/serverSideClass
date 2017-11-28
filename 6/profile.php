<?php session_start(); 
	include('assets/includes/header.html'); ?>
<h3>Hello <?php echo"$_SESSION[\'fname\'] $_SESSION[\'lname\']"?>,</h3>
<p><a href="logOff.php">Click Here</a> to Log Off</p>
<?php include('assets/includes/footer.html'); ?>