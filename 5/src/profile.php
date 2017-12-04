<?php
	include('assets/includes/header.php');
	$uid=$_SESSION['uid'];
	$uname=$_SESSION['uname'];
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
	}
  echo"<h1>Hello $uname</h1>";
?>

<form action="madLib.php" method="post">
 <fieldset>
   <table>
    <?php
      $getMadLibByID = "SELECT MadLib_ID as mlid, noun_one as noun_one FROM cjohnson_qu5773oo.MadLib WHERE USER_ID='$uid'";
      require '../SQL_CONNECT.php';
      $r = @mysqli_query($conn, $getMadLibByID);
      if($r){
        $i=0;
        while($row=mysqli_fetch_assoc($r)){
          $rowClass=(($i%2==0) ? "even" : "odd");
          $mlid = $row['mlid'];
          $noun=$row['noun_one'];
            echo"
              <tr class='$rowClass'>
                <th>
                  <input type='radio' name='mlid' value='$mlid'\>
                </th>
                <th>Jack and the $noun</th>
              </tr>";
            $i++;
          }
        } else {
            echo "
						<tr>
            	<th>No MadLibs found for this user</th>
            </tr>";
        }
      ?>
      <tr>
				<th><input type="submit" class="button" name="updateMadLib" value="View MadLib" /></th>
	      <th><input type="submit" class="button" name="updateMadLib" value="Delete" /></th>
	      <th><input type="submit" class="button" name="updateMadLib" value="New MadLib" /></th>
			</tr>
  </table>
</fieldset>
</form>

<?php include('assets/includes/footer.php');?>
