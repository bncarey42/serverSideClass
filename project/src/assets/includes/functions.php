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

function getPlaylists(){
	$playlists = array();
	$uid=$_SESSION['uid'];
	$sql="SELECT p.playlist_name AS playlistName, p.playlist_ID AS playlistID
				FROM cjohnson_qu5773oo.Player_Playlist p
					join cjohnson_qu5773oo.Player_User_Playlist up on p.playlist_id = up.playlist_id
				WHERE up.user_ID = $uid";
	$result=@mysqli_query($conn, $sql);
	if($result){
      $playlists = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
    return $playlists;
}

function getAllSongs(){
    $songs = array();
    $uid=$_SESSION['uid'];
    $sql="SELECT s.song_title AS songTitle, s.song_ID AS songID
          FROM cjohnson_qu5773oo.Player_Song s
	         join cjohnson_qu5773oo.Player_User_Songs us on us.song_id = s.song_id
           join cjohnson_qu5773oo.User u on us.user_id = u.USR_ID
          WHERE u.USR_ID=$uid";
    require '../SQL_CONNECT.php';

    $result=@mysqli_query($conn, $sql);

    if($result){
      $songs = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
    return $songs;
}

function getArtistForSong($songID){
	return ;
}

fucntion getAlbumForSong(){
	return ;
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
