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
				$numMadLibs=mysqli_num_rows($r);
				if($numMadLibs>0){
					echo"
					<tr class='$rowClass'>
			 			 <th>Select your MadLib</th>
			 			 <th colspan='4'>MadLib Title</th>
		 		 	</tr>";
			 } else {
					 echo "
					 <tr >
						 <th>No MadLibs found for this user. Why don't you add some!</th>
					 </tr>";
			 }
        $i=0;
        while($row=mysqli_fetch_assoc($r)){
          $rowClass=(($i%2==0) ? "even" : "odd");
          $mlid = $row['mlid'];
          $noun=$row['noun_one'];
            echo"
              <tr class='$rowClass'>
                <td >
                  <input type='radio' name='mlid' value='$mlid'\>
                </td>
                <td colspan='3'>Jack and the $noun</th>

              </tr>";
            $i++;
          }
        }
      ?>
		</br></br>
      <tr>
				<td><input type="submit" class="button" name="updateMadLib" value="New MadLib" /></td>
				<?php if($numMadLibs>0){
					echo "
					<td><input type='submit' class='button' name='updateMadLib' value='View MadLib' /></td>
		      <td><input type='submit' class='button' name='updateMadLib' value='Delete' /></td>
					<td><input type='reset' class='button' /></td>";
				} ?>
			</tr>
  </table>
</fieldset>
</form>

<?php include('assets/includes/footer.php');?>
