<?php include('assets/includes/header.php');
//Create New User
$action = $_POST['action'];

switch ($action) {
  case 'Create':
    //Create New User
    $email=$_POST['email'];
    $passwd= isset($_POST['passwd']) ? $_POST['passwd'] : ' ';
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];

    require('mysqli_connect.php');
    $q="INSERT INTO cjohnson_qu5773oo.User(USR_FIRST_NAME,USR_LAST_NAME,USR_EMAIL,USR_PASSWORD) VALUES($firstName, $lastName,$email, $passwd)";

    $r=mysqli_query($conn, $q);

    if($r){
      $loggedOn = true;
    } else{
      echo"Unable to create user";
    }
    mysqli_close($conn);
    break;
  case 'LogIn':
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];

    echo "finding user";
    $findUserByEmail = "SELECT USR_EMAIL FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=$email and USR_PASSWORD=$passwd";
    $exists = false;
    require('mysqli_connect.php');
    $r=mysqli_query($conn, $findUserByEmail);

    if($r){
      $exists=true;
    }
    echo "$exists";
    mysqli_close($conn);
    if($userExists){
      require('mysqli_connect.php');
      $selectUIDByEmail = "SELECT USR_ID as id FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
      $r = mysqli_query($conn, $selectUIDByEmail);
      if($r){
        while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
          $currentUID=$row['id'];
          $loggedOn=true;
          mysqli_close($conn);
        }
      }
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

function isLoggedOn(){
  if($currentUID!=0){
    return true;
  }
}

function getUserName(){
  $getUserByID = "SELECT USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USER_ID = \'$currentUID\'";
  require('assets/db/mysqli_connect.php');
  $r = mysqli_query($conn, $getUserByID);
  $userName='';
  if($r){
    while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
      $userName=$row['fname'].' '.$row['lName'];
    }
  }
  mysqli_free_result($conn);
  return $userName;
}
?>
