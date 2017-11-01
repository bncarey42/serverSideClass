<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $course = $_POST['courseDpt'].$_POST['courseNum'];
  $cohort = $_POST['cohort'];
  $gender = $_POST['gender'];
    echo "<h3>Thanks $fname $lname. Please review $course</h3>";
    $quNum = 0;

    require ("assets/db/mysqli_connect.php");
    $r = @mysqli_query($dbc , $getQuestions);
    if($r){
      while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
        echo "<form action=\"survey.php\" method=\"post\">";
        $question = $row;
        echo "<h3 class=\"question\">$qNum - $question</h3>";
        $qNum++;
        echo "<input type=\"range\" name=\"agree\" min=\"0\" max=\"5\">";
        echo "<textarea name=\"comments\"/>";
      }
      mysqli_free_result($r);
    } else {
      echo "Error getting form, sorry.";
    }
    echo "<input type=\"submit\" class=\"button\"/>";
    echo "</form>";
?>
