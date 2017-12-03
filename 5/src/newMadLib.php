<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
	}
  ?>
  <a href="profile.php">< Return to your profile</a>
  <form action="madLib.php" method="post">
      <input type="text"  name="plural_noun_one" value="plural noun" />
      <input type="text"  name="plural_noun_two" value="plural noun" />
      <input type="text"  name="adjective_one" value="adjective" />
      <input type="text"  name="noun_one" value="noun" />
      <input type="text"  name="adjective_two" value="adjective" />
      <input type="text"  name="adjective_three" value="adjective" />
      <input type="text"  name="verb" value="verb"/>
      <input type="text"  name="body_part" value="body part"/>
      <input type="text"  name="adjective_four" value="adjective" />
      <input type="number"  name="number" value="number" />
      <input type="text"  name="noun_two" value="noun" />
      <input type="submit" class="button" name="updateMadLib" value="Submit MadLib"/>
      <input type="reset"/>
  </form>
<?php include('assets/includes/footer.php');?>
