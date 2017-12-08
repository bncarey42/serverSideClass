<?php
  $getSongs="SELECT song_ID as sid from cjohnson_qu5773oo.Player_Song where artist_ID in (3,1)";
  require 'SQL_CONNECT.php';
  $r=@mysqli_query($conn, $getSongs);
  if($r){
    while($row=mysqli_fetch_assoc($r)){
      $songID=$row['sid'];
      $sql="INSERT INTO cjohnson_qu5773oo.Player_Playlist_Songs(Song_ID,Playlist_ID) VALUES($songID,3)";
      $result=@mysqli_query($conn, $sql);
    }
  }
  mysqli_close($conn);
?>
