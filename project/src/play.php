<?php
  session_start();
  $playlist=$_POST['doSongs'];
  $playlist = array();

  switch($playlist){
    case "Play selected songs now":
      $playlist=$_POST['id'];
      echo "play now";
      $_SESSION['playlistIDs']=$playlist;
      header('Location:player.php');
      break;
    case "Add selected songs to playlist":
      echo "playlist";
      header('Location:choosePlaylist.php');
      break;
  }
?>
