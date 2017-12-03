<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'];
    $_SESSION['errMsg'] = "";
	}
  echo"<h1>Hello $uname</h1>";
?>

<form action="madLib.php" method="post">
 <fieldset>
   <table>

    <?php
      $getMadLibByID = "SELECT MadLib_ID as mlid, noun_one as noun_one FROM cjohnson_qu5773oo.MadLib WHERE USER_ID=$userID";
      require '../SQL_CONNECT.php';
      $r = @mysqli_query($conn, $getMadLibByID);
      if($r){
        $i=0;
        while($row=mysqli_fetch_assoc($r)){
          $rowClass=(($i%2==0) ? "even" : "odd");
          $mlid = $row['mlid'];
          $noun=$row['noun_one'];
            echo"
              <tr class=\"$rowClass\">
                <th>
                  <input type=\"radio\" name=\"mlid\" value=\"$mlid\" hidden\>
                    <input type=\"radio\" />
                  </th>
                <th>Jack and the $noun</th>
              </tr>";
            $i++;
          }
        } else {
            echo "<tr>
            <th>No MadLibs found for this user</th>
            </tr>";
        }
      ?>

      <input type="submit" class="button" name="updateMadLib" value="View MadLib" />
      <input type="submit" class="button" name="updateMadLib" value="Delete" />
      <input type="submit" class="button" name="updateMadLib" value="New MadLib" />
  </table>
</fieldset>
</form>

<?php include('assets/includes/footer.php');?>
