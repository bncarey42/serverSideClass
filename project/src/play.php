<?php
  session_start();
  $playlist=$_POST['doSongs'];
  $playlist = array();

  switch($playlist){
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
