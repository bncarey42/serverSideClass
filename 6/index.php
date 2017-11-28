<?php session_start(); 
	include('assets/includes/header.html'); 
	if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'])
	}
?>
	<form action='assets/include/login.php' method='POST'> 
		Email:<input type='email' name='uname'/>
		Password:<input type='password' name='passwd'/>
		<input type='submit' value='LogIn'/>
	</form>
<?php include('assets/includes/footer.html'); ?>