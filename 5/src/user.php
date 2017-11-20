<?php include('assets/includes/header.php');
//Create New User
$action = $_POST['action'];

switch ($action) {
  case 'Create User':
    $email=$_POST['email'];
    $passwd= isset($_POST['passwd']) ? $_POST['passwd'] : ' ';
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];

    createUser($email, $passwd, $firstName, $lastName);
    logIn($email);
    break;
  case 'Log In':
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];

    $userExists = userExists($email, $passwd);
    $passwordIsCorrect = isCorectPassword($email, $passwd);
    if($userExists && $passwordIsCorrect){
      logIn($email);
    }
    break;
}

if($loggedOn){
  include('assets/forms/profile.php');
} else{
  include('assets/forms/createUser.php');
}
include('assets/includes/footer.php');
?>
