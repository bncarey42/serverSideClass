<?php
session_start();
$loggedIn=true;
if(isset($_SESSION['$loggedIn']) && $_SESSION['$loggedIn']){
 header('Location:library.php');
} else {
  header('Location:logIn.php');
}
?>
