<?php
$email = $_POST('email');
?>
<form action="user.php" method="post">
  <input type="text" name="fName"/>
  <input type="text" name="lname"/>
  <input type="email" name="email" value="<?php echo "$email"; ?>" />
  <input type="password" name="passwd" />
</form>
?>
