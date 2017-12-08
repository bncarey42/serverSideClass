<?php
  include('assets/includes/header.php');
  $view=$_POST['libView'];
?>
<form class='libView' action='library.php' method='post'>
  <input type='submit' name='libView' class='button' value='All Songs'/>
  <input type='submit' name='libView' class='button' value='Playlists'/>
</form>
<?php
  $viewDetail = array();
  switch($view){
    case 'Playlists':
      $title = 'Playlists';
      $viewDetail = getPlaylists();
      break;
    default:
      $title = 'Songs';
      $viewDetail = getAllSongs();
      break;
  }
?>
  <h1><?php echo"$title"; ?></h1>
  <form action='<<<>>>.php' method='POST' class='songs'>
    <table>
      <tr class='header'>
        <th></th>
        <th style="text-align:left;"><h2>Song</h2></th>
        <th><h2>Artist</h2></th>
        <th><h2>Album</h2></th>
      </tr>
      <?php
        $i=0;
        foreach($viewDetail as $id=>$name){
          $rowClass=(($i%2==0) ? "even" : "odd");
          $album=getArtistForSong($id);
          $artist=getArtistForSong($id);
          echo"
            <tr class='$rowClass'>
              <td><input type='checkbox' name='id[]' value='$id'\></td>
              <td>$name</td>
              <td>$artist</td>
              <td>$album</td>
            </tr>";
            $i++;
          }
        ?>
      </table>
      <select>
        <option>New Playlists</option>
        <?php
          $playlists=getPlaylists();
          foreach ($playlists as $id=>$name) {
            echo "<option>$name</option>";
          }
        ?>
      </select>
      <input type='submit' class='button' value='Play selected songs now' />
      <input type='submit' class='button' value='Add selected songs to playlist' />
    </form>
<?php include('assets/includes/footer.php'); ?>
