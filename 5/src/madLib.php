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

      $madLib="Jack and his mother were so poor that they only had two old $plural_noun_one. Jack's mother sent him to the
        market to sell them for some $plural_noun_two. Jack ran into a $adjective_one women and traded her for some magic
        $noun_one. Jack planted the $noun_one, and soon, there was a/an $adjective_two stalk growing
        from the ground. Jack climbed up the stalk and reached a/an $adjective_three castle. He started to $verb when he
        heard the sound of a giant approaching. A voice boomed, Fee fi fo fum, I smell the $body_part of an
        Englishman. The $adjective_four giant chased him down the beanstalk, which Jack cut with an ax. Luckily, jack
        stole the giant's goose that laid $number golden $noun_two for him and his mother.";
      $_SESSION['madLib'] = $madLib;

      require '../SQL_CONNECT.php';
      $insertMadLib="INSERT INTO cjohnson_qu5773oo.MadLib(USER_ID, Plural_Noun_One,
        Plural_Noun_Two, Adjective_One, Noun_One, Adjective_Two, Adjective_Three,
        Verb, Body_Part, Adjective_Four, Number, Noun_Two)
        VALUES ('$uid', '$plural_noun_one', '$plural_noun_two', '$adjective_one',
          '$noun_one', '$adjective_two', '$adjective_three', '$verb', '$body_part',
          '$adjective_four', '$number', '$noun_two')";
      $r = @mysqli_query($conn, $insertMadLib);
      if($r) {
        getMsg();
        header('Location:displayMadLib.php');
      } else{
        $_SESSION['msg']='Error inserting your MadLib. plese try again in a little bit';
        header('Location:newMadLib.php');
      }
      mysqli_close($conn);

      break;
    case 'View MadLib':
    if(isset($_POST['mlid'])){
      $mlid=$_POST['mlid'];
      getMsg();
      $mlid=$_POST['mlid'];
      $_SESSION['madLib'] = getMadLib($mlid);
      header('Location:displayMadLib.php');
    } else {
      $_SESSION['msg']='No MadLib selected to view. Please make a selection and try again.';
      header('Location:profile.php');
    }
      break;

    case 'Delete':
      if(isset($_POST['mlid'])){
        $mlid=$_POST['mlid'];
        $_SESSION['madLib'] = getMadLib($mlid);
        require '../SQL_CONNECT.php';
        $deleteMadLib="DELETE FROM cjohnson_qu5773oo.MadLib WHERE MadLib_ID='$mlid'";
        $r = @mysqli_query($conn, $deleteMadLib);
        if($r) {
            $_SESSION['msg']=$mlid.' Gaze upon this mad MadLib one last time before it is cast into the void and deleted forever';
        } else {
            $_SESSION['msg']="<h3 class='error'>There was an error removing the Mad Lib from your account please return to your profile and try again</h3>";
        }
        mysqli_close($conn);
        header('Location:displayMadLib.php');
      } else {
        $_SESSION['msg']='No MadLib selected to delete. Please make a selection and try again.';
        header('Location:profile.php');
      }
      break;
    case 'New MadLib':
      header('Location:newMadLib.php');
      break;
    }

function getMadLib($mlid){
  require '../SQL_CONNECT.php';
  $getMadLibByID = "SELECT MadLib_ID as mlid, USER_ID as uid, plural_noun_one as plural_noun_one,
  plural_noun_two as plural_noun_two, adjective_one as adjective_one, noun_one as noun_one,
  adjective_two as adjective_two, adjective_three as adjective_three, verb as verb,
  body_part as body_part, adjective_four as adjective_four, number as num, noun_two as noun_two
  FROM cjohnson_qu5773oo.MadLib WHERE MadLib_ID = '$mlid'";
    $r=@mysqli_query($conn, $getMadLibByID);
    $madLib='';
    if($r){
      $title = array('m\'lord', 'sir/madam', 'hommie', 'brother/sister', 'brosef');
      $_SESSION['msg']='Here is your MadLib, '.$title[rand(0,4)];
      while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
          $plural_noun_one = $row['plural_noun_one'];
          $plural_noun_two = $row['plural_noun_two'];
          $adjective_one = $row['adjective_one'];
          $noun_one = $row['noun_one'];
          $adjective_two = $row['adjective_two'];
          $adjective_three = $row['adjective_three'];
          $verb = $row['verb'];
          $body_part = $row['body_part'];
          $adjective_four = $row['adjective_four'];
          $number = $row['num'];
          $noun_two = $row['noun_two'];
        }
      } else {
        $_SESSION['msg'] = "Error setting MadLib";
      }
      mysqli_close($conn);
    $madLib = "Jack and his mother were so poor that they only had two old $plural_noun_one. Jack's mother sent him to the
    market to sell them for some $plural_noun_two. Jack ran into a $adjective_one women and traded her for some magic
    $noun_one. Jack planted the $noun_one, and soon, there was a/an $adjective_two stalk growing
    from the ground. Jack climbed up the stalk and reached a/an $adjective_three castle. He started to $verb when he
    heard the sound of a giant approaching. A voice boomed, \"Fee fi fo fum, I smell the $body_part of an
    Englishman.\" The $adjective_four giant chased him down the beanstalk, which Jack cut with an ax. Luckily, jack
    stole the giant's goose that laid $number golden $noun_two for him and his mother.";

    return $madLib;
}

function getMsg(){
  $title = array('m\'lord', 'sir/madam', 'hommie', 'brother/sister', 'brosef');
  $_SESSION['msg']='Here is your MadLib, '.$title[rand(0,4)];
}
?>
