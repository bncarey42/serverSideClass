<?php include('assets/includes/header.php');
//Create New User
$action = $_POST['action'];

switch ($action) {
  case 'Create User':
    //Create New User
    $email=$_POST['email'];
    $passwd= isset($_POST['passwd']) ? $_POST['passwd'] : ' ';
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];

    require ('assets/db/mysqli_connect.php');
    $q="INSERT INTO cjohnson_qu5773oo.User(USR_FIRST_NAME,USR_LAST_NAME,USR_EMAIL,USR_PASSWORD) VALUES($email, $passwd, $fname, $lname)";
    $r=@mysqli_query($dbc, $q);
    if($r){
      $loggedOn = true;
    } else{
      echo"Unable to create user";
    }
    mysqli_close($dbc);
    break;
  case 'Log In':
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];

    if(userExists() && isCorectPassword()){
      $loggedOn = true;
    }
    break;
}

if($loggedOn){
  $userName = getUserName();
  echo "<h3>Hello $userName</h3>";
  include('assets/forms/profile.php');
} else{
	include('assets/forms/createUser.php');
}
include('assets/includes/footer.php');



function userExists($email) {
  $findUserByEmail = "SELECT USR_EMAIL FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  $exists = false;
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $findUserByEmail);
  if($r){
    $exists = true;
  }
  return $exists;
}

function isCorectPassword($email, $passwd){
  $selectPasswordForUserByEmail = "SELECT USR_PASSWORD as password FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  $correct = false;
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $selectPasswordForUserByEmail);
  if($r){
    while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
      if($passwd = $row['password']){
        $loggedOn=true;
      }
    }
  }
  mysqli_close($dbc);
  }

function logIn(){
  $userExists = userExists($email, $passwd);
  $passwordIsCorrect = isCorectPassword($email, $passwd);
  if($userExists && $passwordIsCorrect){
    require ('assets/db/mysqli_connect.php');
    $selectUIDByEmail = "SELECT USR_ID as id FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
    $r = @mysqli_query($dbc, $selectUIDByEmail);
    if($r){
      while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
        $currentUID=$row['id'];
        $loggedOn=true;
      }
    }
    mysqli_close($dbc);
  }
}

function isLoggedOn(){
  if($currentUID!=0){
    return true;
  }
}

function getUserName(){
  $getUserByID = "SELECT USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USER_ID = \'$currentUID\'";
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $getUserByID);
  $userName='';
  if($r){
    while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
      $userName=$row['fname'].' '.$row['lName'];
    }
  }
  mysqli_close($dbc);
  return $userName;
}
?>
