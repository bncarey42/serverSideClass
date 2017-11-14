<?php
  include('assets/db/q.php');
  $loggedOn=false;
  $styleFiles = array('style','form' );
  $pageFiles = array('Profile'=>'profile.php', 'MadLib'=> 'madLib.php' );
  $currentUID=0;
  
  
function new_user($e, $p, $f, $l) {
	$createUser = "INSERT INTO cjohnson_qu5773oo.User(usr_email, usr_password, usr_first_name, usr_last_name) values ($e, SHA1($p), $f, $l)";
	require ('assets/db/mysqli_connect.php');
    $r = @mysqli_query($dbc, $createUser);
	if($r){
		
	}
}
	
function new_entry(){
	
}
?>
