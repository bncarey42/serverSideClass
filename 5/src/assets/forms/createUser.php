<?php include('assets/includes/header.php');
$email = $_POST('email')
$passwd=$_POST('passwd');
?>
<form action="" method="">
  <input type="text" name="fName"/>
  <input type="text" name="lname"/>
  <input type="email" name="email" value="<?php echo "$email"; ?>" />
  <input type="password" name="passwd" />
</form>
<?php include('assets/includes/footer.php'); ?>
