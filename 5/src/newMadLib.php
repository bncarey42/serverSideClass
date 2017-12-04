<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
	}
  ?>
  <a href="profile.php">< Return to your profile</a>
  <form action="madLib.php" method="post">
      plural noun<input type="text"  name="plural_noun_one"/>
      plural noun<input type="text"  name="plural_noun_two"/>
      adjective<input type="text"  name="adjective_one"/>
      noun<input type="text"  name="noun_one"/>
      adjective<input type="text"  name="adjective_two"/>
      adjective<input type="text"  name="adjective_three"/>
      verb<input type="text"  name="verb"/>
      body part<input type="text"  name="body_part"/>
      adjective<input type="text"  name="adjective_four"/>
      number<input type="number"  name="number"/>
      noun<input type="text"  name="noun_two"/>	
      <input type="submit" class="button" name="updateMadLib" value="Submit MadLib"/>
      <input type="reset"/>
  </form>
<?php include('assets/includes/footer.php');?>
