<?php session_start();
  $playlist=$_POST['doSongs'];
  $playlist = array();

  switch($playlist){
    case 'Play selected songs now':
      $playlist=$_POST['id'];
      $_SESSION['playlistIDs']=$playlist;
      header('Location:player.php');
    case 'Add selected songs to playlist':
      header('Location:choosePlaylist.php');
  }
?>
