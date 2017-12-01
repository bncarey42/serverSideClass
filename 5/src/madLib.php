<?php 
  session_start();
  $action=$_POST['updateMadLib'];
  $mlid=$_POST['mlid'];  

  switch($action){
    case 'View MadLib':
      $title = array('m\'lord', 'sir/madam', 'hommie', 'brother/sister', 'brosef');
      $_SESSION['msg']='Here is your MadLib, $title[rand(0,4)]';
      header(Location:displayMadLib.php);
      break;
    case 'Delete':
      $_SESSION['msg']='Gaze upon this mad MadLib one last time before it is cast into the void and deleted forever';
      header(Location:displayMadLib.php);
      //DELETE FROM cjohnsonqu57733oo.MadLib WHERE Usr_Id=$_SESSION['uid'];
      break;
    case 'New MadLib':
      header(Location:newMadLib.php);
      break;
?>
