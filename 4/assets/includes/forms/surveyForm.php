<form action="" method="post">
  <?php
  require("assets/db/mysql_connect.php");
  $r= @mysqli_query ($connection, $getQuestions);
  if($r){
    $qNum = 0;
    $row=mysqli_fetch_array($r);
    foreach($row as $question){
      echo "<h4 class=\"question\">$qNum. $question</h4>";
    }
  } else{
    sql_error();
  }?>
</form>
