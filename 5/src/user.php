<?php include('assets/includes/header.php');
//Create New User
$action = $_POST['action'];
echo "$action";
switch ($action) {
  case 'Create':
    //Create New User
    echo "In create user";
    $email=$_POST['email'];
    echo "$email";
    $passwd= isset($_POST['passwd']) ? $_POST['passwd'] : ' ';
    echo "$passwd";
    $firstName=$_POST['fName'];
    echo "$firstName";
    $lastName=$_POST['lName'];
    echo "$lastName";

    require('mysqli_connect.php');
    $q="INSERT INTO cjohnson_qu5773oo.User(USR_FIRST_NAME,USR_LAST_NAME,USR_EMAIL,USR_PASSWORD) VALUES($firstName, $lastName,$email, $passwd)";
    echo "$q";
    $r=@mysqli_query($conn, $q);
    echo "$r";
    if($r){
      $loggedOn = true;
    } else{
      echo"Unable to create user";
    }
    break;
  case 'LogIn':
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];

    $userExists = userExists($email);
    $passwordIsCorrect = isCorectPassword($email, $passwd);
    if($userExists && $passwordIsCorrect){
      require('mysqli_connect.php');
      $selectUIDByEmail = "SELECT USR_ID as id FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
      $r = @mysqli_query($conn, $selectUIDByEmail);
      if($r){
        while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
          $currentUID=$row['id'];
          $loggedOn=true;
        }
      }

    }
    break;
    mysqli_close($conn);
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
  echo "finding user";
  $findUserByEmail = "SELECT USR_EMAIL FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=$email";
  $exists = false;
  require('mysqli_connect.php');
  $r = @mysqli_query($conn, $findUserByEmail);
  if($r){
    $exists = true;
  }
  echo "$exists";
  return $exists;
}

function isCorectPassword($email, $passwd){
  $selectPasswordForUserByEmail = "SELECT USR_PASSWORD as password FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
  $correct = false;
  require('assets/db/mysqli_connect.php');
  $r = @mysqli_query($conn, $selectPasswordForUserByEmail);
  if($r){
    while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
      if($passwd = $row['password']){
        $loggedOn=true;
      }
    }
  }

  }


function isLoggedOn(){
  if($currentUID!=0){
    return true;
  }
}

function getUserName(){
  $getUserByID = "SELECT USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USER_ID = \'$currentUID\'";
  require('assets/db/mysqli_connect.php');
  $r = @mysqli_query($conn, $getUserByID);
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
