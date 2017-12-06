<?php $songNum=0; ?>
<script type='text/javascript'>
var audio = $('#player')
audio.addEventListener('ended', function(){
  <?php $currentSongURL = getCurrentSongURL($songNum)?>
  audio.src=<?php echo"$currentSongURL"; ?>;
  audo.pause();
  audio.load();
  audio.play();
});
</script>
