<?php
  session_start();
  $action=$_POST['updateMadLib'];
  $uid=$_SESSION['uid'];
  
  switch($action){
    case 'Submit MadLib':
      $plural_noun_one = $_POST['plural_noun_one'];
      $plural_noun_two = $_POST['plural_noun_two'];
      $adjective_one = $_POST['adjective_one'];
      $noun_one = $_POST['noun_one'];
      $adjective_two = $_POST['adjective_two'];
      $adjective_three = $_POST['adjective_three'];
      $verb = $_POST['verb'];
      $body_part = $_POST['body_part'];
      $adjective_four = $_POST['adjective_four'];
      $number = $_POST['number'];
      $noun_two = $_POST['noun_two'];

      require '../SQL_CONNECT.php';
      $insertMadLib = "INSERT INTO cjohnson_qu5773oo.MadLib(USER_ID, Plural_Noun_One, Plural_Noun_Two, Adjective_One, Noun_One, Adjective_Two, Adjective_Three, Verb, Body_Part, Adjective_Four, Number, Noun_Two) VALUES ($uid, '$plural_noun_one', '$plural_noun_two', '$adjective_one', '$noun_one', '$adjective_two', '$adjective_three', '$verb', '$body_part', '$adjective_four', $number, '$noun_two')";
      $r = @mysqli_query($conn, $deleteMadLib);
      if($r) {
        $getNewMadLib="SELECT MadLib_ID AS mlid FROM cjohnson_qu5773oo.MadLib WHERE USER_ID='$uid' AND Plural_Noun_One='$plural_noun_one' AND Plural_Noun_Two='$plural_noun_two' AND Adjective_One='$adjective_one' AND Noun_One='$noun_one' AND Adjective_Two='$adjective_two' AND Adjective_Three='$adjective_three' AND Verb='$verb' AND Body_Part='$body_part' AND Adjective_Four='$adjective_four' AND Number=$number AND Noun_Two='$noun_two'";
        $rs=@mysqli_query($conn, $getNewMadLib);
        if($rs){
          $row=mysqli_fetch_assoc($rs);
          $_SESSION['madlib']=getMadLib($row['mlid']);
        }
        header('Location:displayMadLib.php');
      } else{
        header('Location:profile.php');
      }

    case 'View MadLib':
      $title = array('m\'lord', 'sir/madam', 'hommie', 'brother/sister', 'brosef');
      $_SESSION['msg']='Here is your MadLib, $title[rand(0,4)]';
      $mlid=$_POST['mlid'];
      $_SESSION['madLib'] = getMadLib($mlid);
      header('Location:displayMadLib.php');
      break;

    case 'Delete':
      $_SESSION['madLib'] = getMadLib($mlid);
      require '../SQL_CONNECT.php';
      $deleteMadLib="DELETE FROM cjohnson_qu5773oo.MadLib WHERE MadLib_ID='$mlid'";
      $r = @mysqli_query($conn, $deleteMadLib);
      if($r) {
          $_SESSION['msg']='Gaze upon this mad MadLib one last time before it is cast into the void and deleted forever';
      }else {
          echo "<h3 class=\"error\">There was an error removing the Mad Lib from your account please return to your profile and try again</h3>";
      }
      mysqli_close($conn);
      header('Location:displayMadLib.php');
      break;

    case 'New MadLib':
      header('Location:newMadLib.php');
      break;
    }
?>
