<?php

  $pageFiles = array(
    "Survey Home"=>"index.php",
    "Dashboard"=>"dashboard.php"
  );

  $styleFiles = array(
    "style.css",
    "headerStyle.css",
    "formStyle.css",
    "footerStyle.css"
  );


function sql_error(){
  echo "
    <div class=\"error\">
      <h3>An Error has occured</h3>
      <p>We appologize for the inconvenience. We are working to resolve the problem that casued this error</p>
    </div>";
    echo mysqli_connect_error($connection);
}

$getQuestions = "SELECT QSTNS_ONE,QSTNS_TWO,QSTNS_THREE, QSTNS_FOUR, QSTNS_FIVE FROM cjohnson_qu5773oo.BTC_QUESTIONS";
$insertStudent = "INSERT INTO STUDENT (STDNT_STUDENT_ID, STDNT_FIRST_NAME, STDNT_LAST_NAME, STDNT_GENDER, STDNT_COHORT) VALUES '$fname' '$lname' '$course' '$cohort' '$gender'";
?>
