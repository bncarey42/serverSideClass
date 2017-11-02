<?php
  $surveyIDToDelete = $_POST['surveyID'];
  $deleteSurvey = "DELETE FROM cjohnson_qu5773oo.BTC_SURVEY WHERE SRVY_ID = $surveyIDToDelete";

  require ('assets/db/mysqli_connect.php');
  foreach ($surveyIDsToDelete as $surveyIDToDelete) {
      $r = @mysqli_query($dbc, $deleteSurvey);
      if(mysqli_affected_rows($dbc) == 1){
        echo "Survey deleted";
      } else {
        echo "Error deleting ";
      }
  }

  header(dashboard.php);
?>
