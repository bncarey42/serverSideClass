<?php include('assets/includes/header.php);
if(isset($_POST('createUser')) && $_POST('createUser') == "Create User") {
  $email=$_POST('email');
  $passwd=$_POST('passwd');
  $firstName=$_POST('fName');
  $lastName=$_POST('lName');

  if(createUser($email, $passwd, $firstName, $lastName)){
    $currentUID=getUIDByEmail($email);
  }
}

if($loggedOn){
  include('assets/forms/profile.php');
} else {
  include('assets/forms/createUser.php');
}
include('assets/includes/footer.php'); ?>
