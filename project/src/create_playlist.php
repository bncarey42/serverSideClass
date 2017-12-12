<?php include('assets/includes/header.php'); ?>
<form action="buildPlaylist.php" method="post">
    <h3>Please name your new playlist</h3>
    <input style="width: 50%;" type="text" name="playlistName" required/></br>
    <input type="submit" class="button" name="action" value="Create and Play new Playlist"/>
</form>
<?php include('assets/includes/footer.php'); ?>
