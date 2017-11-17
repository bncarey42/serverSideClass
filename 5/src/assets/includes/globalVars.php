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

function isLoggedOn($email, $passwd){
  if(userExists($email) && isCorectPassword($email, $passwd)){
    return true;
  }
}

function new_entry(){

}

function userExists($email) {
  $findUserByEmail = "SELECT USR_EMAIL FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  $exists = false;
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $findUserByEmail);
  $exists = $r;
  return $exists;
}

function isCorectPassword($email, $passwd){
  $selectPasswordForUserByEmail = "SELECT USR_PASSWORD as password FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  $correct = false;
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $selectPasswordForUserByEmail);
  if($r){
    while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
      if($passwd = $row['password']){
        $loggedOn=true;
      }
    }
  }
}
?>
