<?php include('assets/includes/header.php);
if($logedOn){
  include('../forms/profile.php');
} else {
  include('../forms/createUser.php');
}
include('assets/includes/footer.php'); ?>
