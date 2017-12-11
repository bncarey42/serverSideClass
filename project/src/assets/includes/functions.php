<?php
session_start();
function getCurrentSongURL($currentID){
  $currentSongURL="";
  $sql="SELECT song_url as url FROM cjohnson_qu5773oo.Player_Song WHERE Song_ID=$currentID";
  require '../SQL_CONNECT.php';
  $result=@mysqli_query($conn, $sql);
  if($result){
    $row=mysqli_fetch_assoc($result);
    $currentSongURL=$row['url'];
  }
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
					join cjohnson_qu5773oo.Player_User_Playlists up on p.playlist_id=up.playlist_id
				WHERE up.user_ID='$uid'";
  require '../SQL_CONNECT.php';
	$result=@mysqli_query($conn, $sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $playlists[$row['playlistID']]=$row['playlistName'];
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
  $artist = "<<unknown artist>>";
  $sql="SELECT artist_name as artist
  FROM cjohnson_qu5773oo.Player_Artist
  WHERE ARTIST_id=(select Artist_id FROM cjohnson_qu5773oo.Player_Song where song_id='$songID')";
  require '../SQL_CONNECT.php';
  $result=@mysqli_query($conn, $sql);
  if ($result) {
    $row=mysqli_fetch_assoc($result);
    $artist = $row['artist'];
  }
  return $artist;
}

function getAlbumForSong($songID){
  $album="<<unknown album>>";
  $sql="SELECT album_title as album_title
  FROM cjohnson_qu5773oo.Player_Album
  WHERE Album_id=(select Album_id FROM cjohnson_qu5773oo.Player_Song where song_id='$songID')";
  require '../SQL_CONNECT.php';
  $result=@mysqli_query($conn, $sql);
  if ($result) {
    $row=mysqli_fetch_assoc($result);
    $album = $row['album_title'];
  }
  return $album;
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
