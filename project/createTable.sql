CREATE TABLE IF NOT EXISTS cjohnson_qu5773oo.Player_Song (
  song_ID INT NOT NULL AUTO_INCREMENT,
  song_title VARCHAR(75) NOT NULL DEFAULT '<<title not provided>>',
  artist_ID INT,
  album_ID INT,
  song_url VARCHAR(250) NOT NULL,
  PRIMARY KEY (song_ID),
  CONSTRAINT artist_id
    FOREIGN KEY (artist_ID)
    REFERENCES cjohnson_qu5773oo.Player_artist (artist_id),
  CONSTRAINT album_id
    FOREIGN KEY (album_ID)
    REFERENCES cjohnson_qu5773oo.Player_album (album_ID));

CREATE TABLE IF NOT EXISTS cjohnson_qu5773oo.Player_User_Songs (
  user_songs_id INT NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  song_ID INT NOT NULL,
  PRIMARY KEY (user_songs_id),
  CONSTRAINT user_id
    FOREIGN KEY (user_id)
    REFERENCES cjohnson_qu5773oo.User (user_id),
  CONSTRAINT song_id
    FOREIGN KEY (song_ID)
    REFERENCES cjohnson_qu5773oo.Player_song (song_ID));

CREATE TABLE IF NOT EXISTS cjohnson_qu5773oo.Player_Album (
  album_ID INT NOT NULL AUTO_INCREMENT,
  artist_ID INT,
  album_title VARCHAR(100) NOT NULL DEFAULT '<<album name not provided>>',
  PRIMARY KEY (album_ID),
  CONSTRAINT artist_ID
    FOREIGN KEY (artist_ID)
    REFERENCES cjohnson_qu5773oo.Player_artist (artist_id));

CREATE TABLE IF NOT EXISTS cjohnson_qu5773oo.Player_Playlist (
  Playlist_ID INT NOT NULL AUTO_INCREMENT,
  Playlist_Name VARCHAR(100) NOT NULL DEFAULT '<<playlist name not provided>>',
  PRIMARY KEY (Playlist_ID));

CREATE TABLE IF NOT EXISTS cjohnson_qu5773oo.Player_User_Playlists (
  User_Playlist_ID INT NOT NULL AUTO_INCREMENT,
  User_ID INT NOT NULL,
  playlist_ID INT NOT NULL,
  PRIMARY KEY (User_Playlist_ID),
  CONSTRAINT User_ID
    FOREIGN KEY (User_ID)
    REFERENCES cjohnson_qu5773oo.User (user_id),
  CONSTRAINT Playlist_Songs
    FOREIGN KEY (playlist_ID)
    REFERENCES cjohnson_qu5773oo.Player_Playlist (Playlist_ID));

CREATE TABLE IF NOT EXISTS cjohnson_qu5773oo.Player_Playlist_Songs (
  Playlist_Songs_ID INT NOT NULL AUTO_INCREMENT,
  Song_ID INT NOT NULL,
  Playlist_ID INT NOT NULL,
  PRIMARY KEY (Playlist_Songs_ID),
  CONSTRAINT Playlist_ID
    FOREIGN KEY (Playlist_ID)
    REFERENCES cjohnson_qu5773oo.Player_Playlist (Playlist_ID),
  CONSTRAINT Song_ID
    FOREIGN KEY (Song_ID)
    REFERENCES cjohnson_qu5773oo.Player_song (Song_ID));

CREATE TABLE IF NOT EXISTS cjohnson_qu5773oo.Player_Artist (
  artist_id INT NOT NULL AUTO_INCREMENT,
  artist_name VARCHAR(50) NOT NULL DEFAULT '<<artist name not provided>>',
  PRIMARY KEY (artist_id));
