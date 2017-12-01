<?php
include('assets/includes/header.php');
if(isset($_SESSION['errMsg'])){
  echo $_SESSION['errMsg'];
}

$newMadLib = $_POST['saveMadLib'];

  if(isset($newMadLib) && $newMadLib=="Save MadLib"){
    new_entry();
    echo "lets go!";
  }
?>
<h1>Hi <?php echo"$_SESSION['fname'] $_SESSION['lname']"; ?></h1>
    <?php
    $getMadLibByID = "SELECT MadLib_ID as mlid, noun_one as noun_one FROM cjohnson_qu5773oo.MadLib WHERE USER_ID = \'$userID\'";
    require('assets/db/mysqli_connect.php');
    $r = @mysqli_query($conn, $getMadLibByID);
    if($r){
      $i=0;
      while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
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
            </tr>
          ";
          $i++;
        }
      } else {
          echo "<tr>
          <th>No MadLibs found for this user</th>
          </tr>";
      }
	  mysqli_free_result($r);

      ?>
      <input type="submit" class="button" name="updateMadLib" value="View MadLib" />
      <input type="submit" class="button" name="updateMadLib" value="Delete" />
      <input type="submit" class="button" name="updateMadLib" value="New MadLib" />


  </table>
</feildset>
</form>
<?php include('assets/includes/footer.php');?>
