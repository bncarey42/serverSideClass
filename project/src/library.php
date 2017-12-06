<?php
  include('assets/includes/header.php');
  $view=$_POST['libView'];
?>
<form action='library.php' method='post'>
  <input type='submit' name='library.php' class='button' value='Songs'/>
  <input type='submit' name='library.php' class='button' value='Albums'/>
  <input type='submit' name='library.php' class='button' value='Artists'/>
  <input type='submit' name='library.php' class='button' value='Playlists'/>
</form>
<?php
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

  include('assets/includes/footer.php'); ?>
