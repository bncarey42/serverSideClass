<?php
session_start();
if($_SESSION['$loggedOn']){
  header('Location:library.php');
} else {
  header('Location:login.php');
}
?>
