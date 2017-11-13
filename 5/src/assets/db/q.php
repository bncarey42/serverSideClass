<?php
$qFindUserByEmail = "SELECT USR_EMAIL FROM cjohnson_qu5773oo.User WHERE USR_EMAIL= ";
$qselectPasswordForUserByEmail = "SELECT USR_PASSWORD as password FROM cjohnson_qu5773oo.User WHERE USR_EMAIL= ";

function userExists($email) {
  $exists = false;
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $qFindUserByEmail.$email);
  $exists = $r
  return $exists
}

function isCorectPassword($email, $passwd){
$correct = false;
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $qselectPasswordForUserByEmail.$email);
  if($r){
    while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
      if($passwd = row['password']){
        $loggedOn=true;
      }
    }
}




?>
