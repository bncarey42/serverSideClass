<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $course = $_POST['dpt'].$_POST['courseNum'];
  $cohort = $_POST['cohort'];
  $gender = $_POST['gender'];

  $results = require ("assets/db/mysqli_connect.php");
  @mysqli_query($con, $insertStudent);
?>

<form action="" method="post">
  <?php
  if($results){
    $qNum = 0;
    $row=mysqli_fetch_array($r);
    foreach($row as $question){
      echo "<h4 class=\"question\">$qNum. $question</h4>";
      $qNum += 1;
  ?>
      <input type="range" name="agree" min="0" max="5">
      <textarea name="comments"/>
  <?php
    }
  } else{
    sql_error();
  }

  ?>
</form>
