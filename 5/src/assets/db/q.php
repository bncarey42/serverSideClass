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




function getMadLibsForUser($userID){
 $madLib = array();
  $getMadLibByID = "SELECT MadLib_ID as mlid, noun_one as noun_one FROM cjohnson_qu5773oo WHERE MadLib_ID = \'$userID\'";
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $getMadLibByID);
  if($r){
    $i=0;
   while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
    $madLib = $row['$i++'];
   }
  }
   return $madLib;
}

function getMadLib($mlid){
  $madLib = array();
  $getMadLibByID = "SELECT * FROM cjohnson_qu5773oo WHERE MadLib_ID = \'$mlid\'";
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $selectUserNameByUid);
  if($r){
    $i=0;
   while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
    $madLib = $row['$i++'];
   }
  }
   return $madLib;
}


?>
