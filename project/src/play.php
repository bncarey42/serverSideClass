<?php
  session_start();
  $action=$_POST['doSongs'];
  $playlists = array();

  switch($action){
    case "Play selected songs now":
      $_SESSION['songIDs']=$_POST['ids'];
      header('Location:player.php');
      break;
    case "Add selected songs to playlist":
      header('Location:choosePlaylist.php');
      break;
  }
?>
