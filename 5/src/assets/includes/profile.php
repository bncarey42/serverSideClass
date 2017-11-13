<?php
  $newMadLib = isset($_POST('saveMadLib');
  if(isset($newMadLib) && $newMadLib=="Save MadLib"){
    //new_entry()
    echo "lets go!";
  }
  $userName=getUserNameByUID($uid);

?>
<h3>
  <?php  echo "Hello $userName"?>
</h3>
<fieldset class="surveyResults">
  <table>
    <form action="assets/forms/updateMadLib.php" method="post">
    <?php
       $usersMadLibs = <<<<<>>>>>>();
       for($i=0; $i<; i++){
        $rowClass=(($i%2==0) ? "even" : "odd");
          echo"
            <tr class=\"$rowClass\">
              <th>
                <input type=\"radio\" name=\"mlid\" value=\"$row['mlid']\" hidden \>
                  <input type=\"radio\" />
                </th>
              <th>Jack and the $row['']</th>
            </tr>
          ";
        }
        } else {
          echo "<tr>
          <th>No MadLibs found for this user</th>
          </tr>";
      ?>
      <input type="submit" name="updateMadLib" value="View MadLib" />
      <input type="submit" name="updateMadLib" value="Delete" />
    </form>
  </table>
</feildset>
