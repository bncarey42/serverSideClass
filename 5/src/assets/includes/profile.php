<?php
  $newMadLib = isset($_POST('saveMadLib');
  if(isset($newMadLib) && $newMadLib=="Save MadLib"){
    //new_entry()
    echo "lets go!";
  }

?>
<fieldset class="surveyResults">
  <table>
    <form action="assets/forms/updateMadLib.php" method="post">
    <?php
      $rowNum = 0;
      $r = getUserMadLibs();
        if($r){
          while ($row = mysqli_fetch_array($r, MYSQLI_BOTH)) {
            $rowClass=(($rowNum%2==0) ? "even" : "odd");
            echo" <tr class=\"$rowClass\">
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
      <input type="submit" name="updateMadLib" value="View" />
      <input type="submit" name="updateMadLib" value="Delete" />
    </form>
  </table>
</feildset>
