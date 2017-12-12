<?php session_start(); include('assets/includes/functions.php');
$action=$_POST['action'];
$songsToAdd=$_SESSION['songIDs'];
switch ($action) {
  case 'Add songs to playlist':
    $playlistID=$_POST['id'];
    foreach ($songsToAdd as $songToAdd) {
      addSongToPlayList($songToAdd, $playlistID);
    }
    $_SESSION['songIDs'] = getSongsforPlaylist($playlistID);
    header('Location:player.php');
    break;
  case 'Add songs to new playlist':
    header('Location:create_playlist.php');
    break;
  case 'Create and Play new Playlist':
    $playlistName=$_POST['playlistName'];
    $plID=createPlaylist($playlistName);
    foreach ($songsToAdd as $songToAdd) {
      addSongToPlayList($songToAdd, $plID);
    }
    header('Location:player.php');
    break;
}

?>
