<?php include("assets/includes/header.php"); ?>
  <fieldset>
    <table>
    <tr>
      <th>STUDENT NAME</th><th>COURSE NUMBER</th><th>ANSWER ONE</th><th>ANSWER TWO</th><th>ANSWER THREE</th><th>ANSWER FOUR</th><th>ANSWER FIVE</th><th>DELETE</th>
    </tr>
    <form action="assets/includes/forms/deleteSurvey.php" method="post">
<?php
    require ('assets/db/mysqli_connect.php');
    $r = @mysqli_query($dbc, $fetchSurveys);
    $rowNum = 0;
    if($r){
      while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
        $rowClass=(($rowNum%2==0) ? "even" : "odd");
        echo"<tr class=\"$rowClass\">
          <th>$row[\'lastName\'], $row['firstName']</th>
          <th>$row[\'className\']</th>
          <th>$row[0] : $row[1]</th>
          <th>$row[2] : $row[3]</th>
          <th>$row[4] : $row[5]</th>
          <th>$row[6] : $row[7]</th>
          <th>$row[8] : $row[9]</th>
          <th><input type=\"checkbox\" name=\"surveyToDelete[]\" value=\"$row['surveyID']\"/></th>";

          $rowClass++;
      }
      mysqli_free_result($r);
    } else {
      for($index = 1; $index <= 10; $index++){
        $rowClass=(($index % 2==0) ? "even" : "odd");
        echo"<tr class=\"$rowClass\">
          <th></th>
          <th></th>
          <th></th>
          <th>Error fetching surveys</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>";
      }
    }
  echo "</tr>
      </form>
      </tr>
    </table>
  </fieldset>";

  include("assets/includes/footer.php");
?>
