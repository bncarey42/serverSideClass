<?php
  include('assets/includes/header.php');
  $view=$_POST['libView'];
?>
<form action='library.php' method='post'>
  <input type='submit' name='libView' class='button' value='Songs'/>
  <input type='submit' name='libView' class='button' value='Albums'/>
  <input type='submit' name='libView' class='button' value='Artists'/>
  <input type='submit' name='libView' class='button' value='Playlists'/>
</form>
<?php
  switch($view){
    case 'Albums':
      $title = 'Albums';
      $viewDetail = getAllAlbums();
      break;
    case 'Artists':
      $title = 'Artists';
      $viewDetail=getAllAlbumsForArtist();
      break;
    case 'Playlist':
      $title = 'Playlists';
      $viewDetail = getPlaylists();
      break;
    default:
      $title = 'Songs';
      $viewDetail = getAllSongs();
      break;
  }
?>
  <h2><?php echo"$title"; ?></h2>
<? include('assets/includes/footer.php'); ?>
