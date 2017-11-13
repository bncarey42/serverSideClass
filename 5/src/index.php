<?php
include('assets/includes/header.php');
if($loggedOn){
  include('assets/includes/profile.php');
} else {
  include('assets/includes/login.html');
}
include('assets/includes/footer.php');
?>
