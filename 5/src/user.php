<?php include('assets/includes/header.php');
if(isset($_POST['createUser']) && $_POST['createUser'] == "Create User") {
  $email=$_POST['email'];
  $passwd=$_POST['passwd'];
  $firstName=$_POST['fName'];
  $lastName=$_POST['lName'];
  
  new_user($email, $passwd, $firstName, $lastName);
  }
  if(createUser($email, $passwd, $firstName, $lastName)){
    function getUIDbyEmail($email){
      $selectUIDByEmail = "SELECT USR_ID as id FROM cjohnson_qu5773oo.User WHERE USR_EMAIL=\'$email\'";
        require ('assets/db/mysqli_connect.php');

      $r = @mysqli_query($dbc, $selectUIDByEmail);
      if($r){
          while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
          $currentUID=$row['id'];
        }
      }
		mysqli_free_result($r);
	  }
	}

if($loggedOn){
  include('assets/forms/profile.php');
} else {
  include('assets/forms/createUser.php');
}
include('assets/includes/footer.php');


function createUser($email, $passwd, $fname, $lname){
  $createUser="INSERT into cjohnson_qu5773oo.User(USR_EMAIL, USR_PASSWORD, USR_FIRST_NAME, USR_LAST_NAME) VALUES ($email, $passwd, $fname, $lname)";
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $insertStudent);
  if($r){
    $loggedOn = true;
  }
  return $r;
}
?>
