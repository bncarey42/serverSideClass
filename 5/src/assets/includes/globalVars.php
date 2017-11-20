<?php
  include('assets/db/q.php');


  $ERROR_MSG = "";
  $styleFiles = array('style','form' );
  $pageFiles = array('Profile'=>'profile.php', 'MadLib'=> 'madLib.php' );
  $currentUID=0;


function createUser($email, $passwd, $fname, $lname){
  $createUser="INSERT into cjohnson_qu5773oo.User(USR_EMAIL, USR_PASSWORD, USR_FIRST_NAME, USR_LAST_NAME) VALUES ($email, $passwd, $fname, $lname)";
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $insertStudent);
  if($r){
    $loggedOn = true;
  }
  mysqli_free_result($r);
  return true;
}

function isLoggedOn(){
  if($currentUID!=0){
    return true;
  }
}

function logIn($email){
  $selectUIDByEmail = "SELECT USR_ID as id FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
    require ('assets/db/mysqli_connect.php');

  $r = @mysqli_query($dbc, $selectUIDByEmail);
  if($r){
      while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
      $currentUID=$row['id'];
        $loggedOn=true;
    }
  }
    mysqli_free_result($r);

}

function userExists($email) {
  $findUserByEmail = "SELECT USR_EMAIL FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  $exists = false;
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $findUserByEmail);
  $exists = $r;
  return $exists;
}

function isCorectPassword($email, $passwd){
  $selectPasswordForUserByEmail = "SELECT USR_PASSWORD as password FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  $correct = false;
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $selectPasswordForUserByEmail);
  if($r){
    while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
      if($passwd = $row['password']){
        $loggedOn=true;
      }
    }
  }
  mysqli_free_result($r);
}

?>
