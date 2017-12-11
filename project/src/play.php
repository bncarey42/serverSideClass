<?php
  session_start();
  $action=$_POST['doSongs'];
  $playlist = array();

  switch($action){
    case "Play selected songs now":
      $playlist=$_POST['id'];
      foreach ($playlist as $id) {
        echo $id;
      }
      $_SESSION['playlistIDs']=$playlist;
      break;
    case "Add selected songs to playlist":
      header('Location:choosePlaylist.php');
      break;
  }
?>
