<?php
$email = $_POST['email'];
?>
<h3>Looks like you haven't been here before. Give us some info here and we'll set up a profile to save your work.</h3>
<form action="user.php" method="post">
  <label for='fname'>First Name:</label><input type="text" name="fName" required/>
  <lable for='lname'>Last Name:</lable><input type="text" name="lName" required/>
  <lable for="">Email:</lable><input type="email" name="email" value="<?php echo "$email"; ?>" required/>
  Password<input type="password" name="passwd" />
  <input type="submit" class="button" class="button" value="Create User" name="action" />
</form>
