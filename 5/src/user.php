<?php include('assets/includes/header.php');
//Create New User
$action = $_POST['action'];

switch ($action) {
  case 'Create User':
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];

    createUser($email, $passwd, $firstName, $lastName);
    logIn();
    break;
  case 'Log In':
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];

    $userExists = userExists($email, $passwd);
    $passwordIsCorrect = $isCorectPassword($email, $passwd);
    if($userExists && $passwordIsCorrect){
      logIn($email);
    }
    break;
  case 'Save MadLib':
    insertNewMadLib($_POST['plural_noun_one'], $_POST['plural_noun_two'],
      $_POST['noun_one'], $_POST['adjective_two'], $_POST['adjective_three'],
      $_POST['verb'], $_POST['body_part'], $_POST['adjective_four'],
      $_POST['number'], $_POST['noun_two'])
}

if($loggedOn){
  include('assets/forms/profile.php');
} else if(){
  include('assets/forms/createUser.php');
} else {

}
include('assets/includes/footer.php');
?>
