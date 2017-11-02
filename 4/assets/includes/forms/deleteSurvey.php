<?php
  $surveyIDToDelete = $_POST['surveyID'];
  
  require ('assets/db/mysqli_connect.php');
  foreach ($surveyIDsToDelete as $surveyIDToDelete) {
      $r = @mysqli_query($dbc, $deleteSurvey);
      if(mysqli_affected_rows($dbc) == 1){

      } else {
        echo "Error deleting ";
      }
  }
?>
