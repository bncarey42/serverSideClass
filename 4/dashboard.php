<?php include("assets/includes/header.php");

$surveyIDsToDelete = $_POST['surveyID'];

if(isset($surveyIDsToDelete)){
$deleteSurvey = "DELETE FROM cjohnson_qu5773oo.BTC_SURVEY WHERE SRVY_ID = $surveyIDToDelete";

require ('assets/db/mysqli_connect.php');
  foreach ($surveyIDsToDelete as $surveyIDToDelete) {
    $r = @mysqli_query($dbc, $deleteSurvey);
    if(mysqli_affected_rows($dbc) == 1){
      echo "Survey deleted";
    } else {
      echo sql_error("Error deleting survey");
    }
  }
}
?>
<fieldset class="surveyResults">
<table>
<?php
    require ('assets/db/mysqli_connect.php');

    $fetchSurveys = "SELECT SRVY_ANSWER_ONE, SRVY_COMMENT_ONE, SRVY_ANSWER_TWO, SRVY_COMMENT_TWO,
      SRVY_ANSWER_THREE, SRVY_COMMENT_THREE, SRVY_ANSWER_FOUR, SRVY_COMMENT_FOUR, SRVY_ANSWER_FIVE,
      SRVY_COMMENT_FIVE, SRVY_ID as surveyID, SRVY_CMBR_ID as cmbrID, STDNT_FIRST_NAME as firstName,
      STDNT_LAST_NAME as lastName, CLS_CLASS_NAME as className
        FROM cjohnson_qu5773oo.BTC_SURVEY JOIN cjohnson_qu5773oo.BTC_CLASS_MEMBERS on SRVY_CMBR_ID = CMBR_ID
        JOIN cjohnson_qu5773oo.BTC_STUDENT on CMBR_STUDENT_ID = STDNT_STUDENT_ID
        JOIN cjohnson_qu5773oo.BTC_CLASS on CLS_CLASS_ID = CMBR_CLASS_ID";

    $r = @mysqli_query($dbc, $fetchSurveys);
    $rowNum = 0;
    if($r){
      while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
        $rowClass=(($rowNum%2==0) ? "even" : "odd");
        echo"
        <tr>
          <th>STUDENT NAME</th><th>COURSE NUMBER</th><th>ANSWER ONE</th><th>ANSWER TWO</th><th>ANSWER THREE</th><th>ANSWER FOUR</th><th>ANSWER FIVE</th><th>DELETE</th>
        </tr>
        <form method=\"post\">
          <tr class=\"$rowClass\">
            <th>\"$row[lastName]\", \"$row[firstName]\" </th>
            <th>\"$row[className]\"</th>
            <th>$row[0] : $row[1]</th>
            <th> $row[2] : $row[3]</th>
            <th>$row[4] : $row[5]</th>
            <th> $row[6] : $row[7]</th>
            <th> $row[8] : $row[9]</th>
            <th><input type=\"checkbox\" name=\"surveyToDelete[]\" value=\"$row[surveyID]\"/></th>
          </tr>";

          $rowClass++;
      }
      mysqli_free_result($r);
    } else {
      for($index = 1; $index <= 10; $index++){
        $rowClass=(($index % 2==0) ? "even" : "odd");
        echo"
          <tr class=\"$rowClass\">
            <th></th>
            <th></th>
            <th></th>
            <th>"; sql_error("Error fetching surveys Error fetching surveys");
            echo "</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            </tr>";
      }
    }
    echo "<input type=\"submit\" value=\"Delete selected surveys\"/>
      </form>
      </tr>
    </table>
  </fieldset>";

  include("assets/includes/footer.php");

function deleteSurvey(){

}
?>
