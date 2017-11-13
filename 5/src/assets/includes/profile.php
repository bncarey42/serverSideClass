<?php
  $newMadLib = $_POST['saveMadLib'];

  if(isset($newMadLib) && $newMadLib=="Save MadLib"){
    //new_entry()
    echo "lets go!";
  }
?>
<h3>
  <?php  echo "Hello $userName"?>
</h3>
<form action="assets/forms/updateMadLib.php" method="post">
  <input type="submit" value="New madLib" name="newMadLib" />
  <fieldset class="surveyResults">
  <table>

    <?php
    $getMadLibByID = "SELECT MadLib_ID as mlid, noun_one as noun_one FROM cjohnson_qu5773oo WHERE MadLib_ID = \'$userID\'";
    require ('assets/db/mysqli_connect.php');
    $r = @mysqli_query($dbc, $getMadLibByID);
    if($r){
      $i=0;
      while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
        $rowClass=(($i%2==0) ? "even" : "odd");
        $mlid = $row['mlid'];
        $noun=$row['noun_one'];
          echo"
            <tr class=\"$rowClass\">
              <th>
                <input type=\"radio\" name=\"mlid\" value=\"$mlid\" hidden \>
                  <input type=\"radio\" />
                </th>
              <th>Jack and the $noun</th>
            </tr>
          ";
        }
      } else {
          echo "<tr>
          <th>No MadLibs found for this user</th>
          </tr>";
      }
      ?>
      <input type="submit" name="updateMadLib" value="View MadLib" />
      <input type="submit" name="updateMadLib" value="Delete" />

  </table>
</feildset>
</form>

<?php function getUserNameByUID($uid){
  $selectUserNameByUid="SELECT USR_FIRST_NAME as fname, USR_LAST_NAME as lname FROM cjohnson_qu5773oo.User WHERE USR_ID=$uid";
  $fname="";
  $lname="";
  require ('assets/db/mysqli_connect.php');
  $r = @mysqli_query($dbc, $selectUserNameByUid);
  if($r){
    while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
      $fname=$row['fname'];
      $lname=$row['lname'];
    }
    return $fname." ".$lname;
  }
}
$userName=getUserNameByUID($uid); ?>
