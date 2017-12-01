<?php 
  session_start();
  $action=$_POST['updateMadLib'];
  $mlid=$_POST['mlid'];  

  switch($action){
    case 'View MadLib':
      $title = array('m\'lord', 'sir/madam', 'hommie', 'brother/sister', 'brosef');
      $_SESSION['msg']='Here is your MadLib, $title[rand(0,4)]';
      header(Location: );
      break;
    case 'Delete':
      $_SESSION['msg']='Are you sure you want to delete this MadLib?';
      header(Location: );
      break;
    case 'New MadLib':
      header(Location: );
      break;
?>
