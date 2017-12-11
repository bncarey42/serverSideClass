<?php include('assets/includes/header.php');
  $ids=$_SESSION['playlistIDs'];
  $currentSongNum=0;
?>
  <script type='text/javascript'>
  var audio = $('#player')
  audio.addEventListener('ended', function(){
    <?php $currentSongURL = getCurrentSongURL($currentSongNum++)?>
    audio.src=<?php echo"$currentSongURL"; ?>;
    audo.pause();
    audio.load();
    audio.play();
  });
  </script>
  <section class="player">
    <audio id="player" controls autoplay preload="auto">
      <source src="assets/audio/HailGuest.mp3" type="audio/mpeg"/>
      You can't do anything can you internet explorer?!
    </audio>
  </section>
  <section class="playlist">
    <h2>UP NEXT</h>
    <ul>
      <?php
        for ($i=0; $i < 75 ; $i++) {
          echo "<li class="playlistEntries"> <a><h4>Title : Artist</h4></a> </li>";
        }
       ?>
    </ul>
  </section>
<?php include('assets/includes/footer.php') ?>
