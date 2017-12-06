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
    return ;
}

function getAllSongs(){
    $songs = array();
    $uid=$_SESSION['uid'];
    $sql="SELECT s.song_title AS SongTitle
          FROM cjohnson_qu5773oo.Player_Song s
	         join cjohnson_qu5773oo.Player_User_Songs us on us.song_id = s.song_id
           join cjohnson_qu5773oo.User u on us.user_id = u.USR_ID
          WHERE u.USR_ID=?";
    require '../SQL_CONNECT.php';

    $result=@mysqli_query($conn, $sql);

    if($result){
      $songs = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
    return $songs;
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
