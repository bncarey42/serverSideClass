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
  $viewDetail = array();
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
  $i=0;
  foreach($viewDetail as $id->$name){
    $rowClass=(($i%2==0) ? "even" : "odd");
    echo"
      <tr class='$rowClass'>
        <td >
      <input type='checkbox' name='id' value='$id'\>
        </td>
      <td>$name</th>
      </tr>";
      $i++;
    }
<? include('assets/includes/footer.php'); ?>
