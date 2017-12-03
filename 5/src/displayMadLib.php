<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
	}
  ?>
<h2>MadLib</h2>
<h3>Jack and the <?php echo "$noun_one;"; ?></h3>
<p>
  <?php echo $_SESSION['madLib'];  $_SESSION['madLib']='';?>
  <button formaction="profile.php"/>
</p>
<?php include('assets/includes/footer.php');?>
