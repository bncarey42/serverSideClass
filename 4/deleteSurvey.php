<?php include("assets/includes/globalVars.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="refresh" content="5; url=dashboard.php" />
  <title>University of OCairdha : Student Survey</title>
  <?php
    foreach ($styleFiles as $styleFile) {
      echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/style/$styleFile\" />";
    }
  ?>
</head>
<?php
  $surveyIDToDelete = (isset($_POST['surveyID'])) ? $_POST['surveyID'] : -999;
  if($surveyIDToDelete != -999){
    $numRows = mysqli_affected_rows($dbc);
    if($numRows != 0){
      require ('assets/db/mysqli_connect.php');
      foreach ($surveyIDsToDelete as $surveyIDToDelete) {
        $deleteSurvey = "DELETE FROM cjohnson_qu5773oo.BTC_SURVEY WHERE SRVY_ID = $surveyIDToDelete";
          $r = @mysqli_query($dbc, $deleteSurvey);
          if(mysqli_affected_rows($dbc) == 1){
            echo "Survey(s) deleted";
          } else {
            echo "Error deleting ";
          }
      }
    }
      mysqli_close($dbc);
  } else {
    echo "<h3 class=\"error\"> No survey(s) selected to delete</h3>";
  }
?>
