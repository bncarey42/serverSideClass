<?php
  include('assets/includes/header.php');
  $ids=$_SESSION['songIDs'];
  $currentSongNum=0;

?>
<script src="https://code.jquery.com/jquery-2.2.0.js" ></script>
<script>
    var aud = document.getElementById('audio')).addEventListener('ended', myFunction() {
      aud.src = "<?php $currentSongURL=getCurrentSongURL($ids[$currentSongNum++]); ?>";
      aud.load();
      aud.play();
    });
</script>
  <audio id="audio" controls autoplay preload="auto" src="<?php echo $currentSongURL;?>" autoplay ended="myFunction()">
    You can't do anything can you internet explorer?!
  </audio>

  <h2>Now Playing</h2>
  <ul class="upnext">
    <?php
    $i=0;
    foreach($ids as $id){
      $rowClass=(($i%2==0) ? "even" : "odd");
      $name=getSongNameByID($id);
      $album=getAlbumForSong($id);
      $artist=getArtistForSong($id);
      echo" <li class='$rowClass'>
          $name - $artist - $album
          </li>";
          $i++;
      } ?>
  </ul>

<?php include('assets/includes/footer.php');?>
