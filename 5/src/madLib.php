<?php
  session_start();
  $action=$_POST['updateMadLib'];
  $mlid=$_POST['mlid'];

  switch($action){
    case 'View MadLib':
      $title = array('m\'lord', 'sir/madam', 'hommie', 'brother/sister', 'brosef');
      $_SESSION['msg']='Here is your MadLib, $title[rand(0,4)]';
      require '../SQL_CONNECT';
      $getMadLibByID = "SELECT MadLib_ID as mlid, USER_ID as uid, plural_noun_one as plural_noun_one,
        plural_noun_two as plural_noun_two, adjective_one as adjective_one, noun_one as noun_one,
        adjective_two as adjective_two, adjective_three as adjective_three, verb as verb,
        body_part as body_part, adjective_four as adjective_four, number as number, noun_two as noun_two
        FROM cjohnson_qu5773oo.MadLib WHERE MadLib_ID = \'$mlid\'";

        require('assets/db/mysqli_connect.php');
        $r=@mysqli_query($conn, $getMadLibByID);
        if($r){
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
              $number = $row['number'];
              $noun_two = $row['noun_two'];
            }
            mysqli_close($conn);
          }

      header(Location:displayMadLib.php);
      break;

    case 'Delete':
      require '../SQL_CONNECT';
      $deleteMadLib="DELETE FROM cjohnson_qu5773oo.MadLib WHERE MadLib_ID=\'$mlid\'";
      $r = @mysqli_query($conn, $deleteMadLib);
      if($r) {
          $_SESSION['msg']='Gaze upon this mad MadLib one last time before it is cast into the void and deleted forever';
      }else {
          echo "<h3 class=\"error\">There was an error removing the Mad Lib from your account please return to your profile and try again</h3>";
      }

      header(Location:displayMadLib.php);
      break;

    case 'New MadLib':
      header(Location:newMadLib.php);
      break;
?>
