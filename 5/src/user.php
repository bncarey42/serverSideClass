<?php include('assets/includes/header.php);
if($logedOn){
  include('assets/forms/profile.php');
} else {
  include('assets/forms/createUser.php');
}
include('assets/includes/footer.php'); ?>
