<?php
$email=$_POST['email'];
$passwd=$_POST['passwd'];

$isLoggedOn = isLoggedOn($email, $passwd);
 if($isLoggedOn){
   include('../includes/profile.php');
 } else {
   include 'createUser.php';
 }
 ?>
