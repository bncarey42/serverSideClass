<?php
  include('assets/includes/header.php');
  $ids=$_SESSION['songIDs'];
  $currentSongNum=0;
  $currentSongURL=getCurrentSongURL($currentSongNum++);
?>
<script>
var vid = document.getElementById("myAudio");
function myFunction() {
  <?php $currentSongURL=getCurrentSongURL($currentSongNum++); ?>
    alert(vid.ended);
}
</script>
  <audio id="myAudio" controls autoplay preload="auto" onended="myFunction()">
    <source src="<?php echo $currentSongURL;?>" type="audio/mpeg"/>
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

<?php include('assets/includes/footer.php') ?>
