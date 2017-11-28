<?php session_start();
	include('assets/includes/header.html');
	$name=$_SESSION['fname'].' '.$_SESSION['lname'];
	?>
<h3>Hello <?php echo $name ?>,</h3>
<p><a href="logOff.php">Click Here</a> to Log Off</p>
<?php include('assets/includes/footer.html'); ?>
