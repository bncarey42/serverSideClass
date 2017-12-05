<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
	}
  ?>
  <a href="profile.php">< Return to your profile</a>

  <form action="madLib.php" method="post">
		<table>
      <tr><td>plural noun</td><td><input type="text"  name="plural_noun_one" /></td></tr>
      <tr><td>plural noun</td><td><input type="text"  name="plural_noun_two" /></td></tr>
      <tr><td>adjective</td><td><input type="text"  name="adjective_one" /></td></tr>
      <tr><td>noun</td><td><input type="text"  name="noun_one" /></td></tr>
      <tr><td>adjective</td><td><input type="text"  name="adjective_two" /></td></tr>
      <tr><td>adjective</td><td><input type="text"  name="adjective_three"/></td></tr>
      <tr><td>verb</td><td><input type="text"  name="verb" /></td></tr>
      <tr><td>body part</td><td><input type="text"  name="body_part" /></td></tr>
      <tr><td>adjective</td><td><input type="text"  name="adjective_four" /></td></tr>
      <tr><td>number</td><td><input type="number"  name="number" /></td></tr>
      <tr><td>noun</td><td><input type="text"  name="noun_two" /></td></tr>
			<tr>
				<td><input type="reset" class="button"/></td>
				<td><input type="submit" class="button" name="updateMadLib" value="Submit MadLib"/></td>
			</tr>
		</table>
  </form>

<?php include('assets/includes/footer.php');?>
