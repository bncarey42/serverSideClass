<?php
  session_start();
  include('assets/includes/header.php');
  $newIDs=$_SESSION['songIDs']; //ids to add
  $playlists=getAllPlaylists($_SESSION['uid']); //ids and names of playlists to add to for user
?>
<h2>Add songs to one of the following playlists or to a new playlist</h2>
<form action="buildPlaylist.php" method="post">
<table>
<?php
  $i=1;
  foreach($playlists as $id=>$name){
    $rowClass=(($i%2==0) ? "even" : "odd");
    echo"
      <tr class='$rowClass'>
        <td><input type='radio' name='id' value='$id'\></td>
        <td>$name</td></tr>";
    }
  ?>
  </table>
  <input type="submit" class="button" name="action" value="Add songs to playlist"/>
  <input type="submit" class="button" name="action" value="Add songs to new playlist"/>

  </form>
<?php include('assets/includes/footer.php') ?>
