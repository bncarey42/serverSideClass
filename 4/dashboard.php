<?php include("assets/includes/header.php"); ?>

  <fieldset>
    <table>
    <tr>
      <th>STUDENT NAME</th><th>COURSE NUMBER</th><th>VIEW</th><th>DELETE</th>
    </tr>
      <tr>
    <?php
        $rowNum = 0;
    foreach($surveys as $survey){
      ?>
        <th class=<?php echo ($rumNum%2==0) ? "even" : "odd" ?>></th>
    }
        <th><a href="delete.php">Delete</a></th>
        </tr>
    </table>
  </fieldset>

<?php include("assets/includes/footer.php");?>
