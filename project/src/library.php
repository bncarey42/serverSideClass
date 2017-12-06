<?php
include('assets/includes/header.php');
  $view=$_POST['libView'];

  switch($view){
    case 'Albums':
      $albums = getAllAlbums();
      break;
    case 'Artists':
      $artists=getAllAlbumsForArtist();
      break;
    case 'Playlist':
      $playlist = getPlaylists();
      break;
    default:
      $songs = getAllSongs();
      break;
  }
?>
