<?php include("assets/includes/globalVars.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>University of OCairdha : Student Survey</title>
  <meta http-equiv="refresh" content="0; URL='http://new-website.com'" />
  <?php
    foreach ($styleFiles as $styleFile) {
      echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/style/$styleFile\" />";
    }

  ?>
  <link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville" rel="stylesheet">
</head>
<?php
  require '../SQL_CONNECT.php';
  $insertStudent = "INSERT INTO cjohnson_qu5773oo.STUDENT (STDNT_STUDENT_ID, STDNT_FIRST_NAME, STDNT_LAST_NAME, STDNT_GENDER, STDNT_COHORT) VALUES '$fname' '$lname' '$course' '$cohort' '$gender'";
  $r = @mysqli_query($dbc, $insertStudent);
  $rowNum = 0;
  if($r){
?>
</html>
