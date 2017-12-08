<?php
session_start();
function getCurrentSongURL($currentSet){

    return $curentSongURL;
}

function getAllAlbums(){
    return ;
}

function getAllAlbumsForArtist(){
    return ;
}

function getAllPlaylists(){
	$playlists = array();
	$uid=$_SESSION['uid'];
	$sql="SELECT p.playlist_ID AS playlistID, p.playlist_name AS playlistName
				FROM cjohnson_qu5773oo.Player_Playlist p
					join cjohnson_qu5773oo.Player_User_Playlists up on p.playlist_id = up.playlist_id
				WHERE up.user_ID = $uid";
	$result=@mysqli_query($conn, $sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $playlist[$row['playlistID']]=$playlistName;
    }
  }
  return $playlists;
}

function getAllSongs(){
  $songs = array();
  $uid=$_SESSION['uid'];
  $sql="SELECT s.song_ID AS songID, s.song_title AS songTitle
        FROM cjohnson_qu5773oo.Player_Song s
         join cjohnson_qu5773oo.Player_User_Songs us on us.song_id = s.song_id
         join cjohnson_qu5773oo.User u on us.user_id = u.USR_ID
        WHERE u.USR_ID='$uid'";
  require '../SQL_CONNECT.php';

  $result=@mysqli_query($conn, $sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $songs[$row['songID']]=$row['songTitle'];
    }
  }
  return $songs;
}

function getArtistForSong($songID){
  $sql="SELECT artist_name as artist
  FROM cjohnson_qu5773oo.Player_artist
  WHERE ARTIST_id=(select Artist_id FROM cjohnson_qu5773oo.player_sONG where song_id='$songID')";
  require '../SQL_CONNECT.php';
  $result=@mysqli_query($conn, $sql);
  if ($result) {
    $row=mysqli_fetch_assoc($result);
    return $row['artits'];
  }
}

function getAlbumForSong($songID){
  $sql="SELECT album_title as album_title
  FROM cjohnson_qu5773oo.Player_Album
  WHERE Album_id=(select Artist_id FROM cjohnson_qu5773oo.Player_Song where song_id='$songID')";
  $result=@mysqli_query($conn, $sql);
  if ($result) {
    $row=mysqli_fetch_assoc($result);
    return $row['album_title'];
  }
}

function getSongsForAlbum($albumID){
    return ;
}

function getSongsForArtist($artistID){
    return ;
}

function getSongsforPlaylist($playlistID){
    return ;
}

function addSongToPlayList($songID, $playlistID){

}

function addAlbumToPlaylist(){

}

?>
