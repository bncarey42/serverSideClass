<?php
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

function getUIDbyEmail($email){
  $selectUIDByEmail = "SELECT USR_ID as id FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  require ('mysqli_connect.php');
  
  $r = @mysqli_query($dbc, $selectUIDByEmail);
  if($r){
    while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
      return $row['id'];
    }
  }
}

function getUserNameByUID($uid){
  $selectUserNameByUid="SELECT USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USR_ID=$uid";
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $selectUserNameByUid);
  if($r){
    while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
      return $fname." ".$lname;
    }  
  }
}

function getMadLibsForUser($userID){\
}

function deleteMadLib($mlid){

}

fuction getMadLib($mlid){

}

function createUser($email, $passwd, $fname, $lname){
  $createUser="INSERT into cjohnson_qu5773oo.User(USR_EMAIL, USR_PASSWORD, USR_FIRST_NAME, USR_LAST_NAME) VALUES ($email, $passwd, $fname, $lname)";
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $insertStudent);
  
  if($r){
    $loggedOn = true; 
  }
  return $r;
?>
