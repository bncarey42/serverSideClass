<?php
  session_start();
  include('assets/includes/header.php');
  $playlists=$_SESSION['playlist']
?>
<?php
  $i=0;
  foreach($viewDetail as $playlist){
    $rowClass=(($i%2==0) ? "even" : "odd");
    $playlistName=getAlbumForSong($id);
    echo"
      <tr class='$rowClass'>
        <td><input type='checkbox' name='id[]' value='$id'\></td>
        <td>$name</td></tr>"
    }
  ?>
<?php include('assets/includes/footer.php') ?>
