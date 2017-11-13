<?php
$email = $_POST('email');
?>
<form action="user.php" method="post">
  <input type="text" name="fName"/>
  <input type="text" name="lName"/>
  <input type="email" name="email" value="<?php echo "$email"; ?>" />
  <input type="password" name="passwd" />
  <input type="submit" value="Create User" name="createUser" />
</form>
?>
