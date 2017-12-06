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
<form action='library.php' method='post'>
  <input type='submit' name='library.php' value='Songs'/>
  <input type='submit' name='library.php' value='Albums'/>
  <input type='submit' name='library.php' value='Artists'/>
  <input type+'submit' name='library.php' value='Playlists'/>
</form>
<?php include('assets/includes/footer.php'); ?>
