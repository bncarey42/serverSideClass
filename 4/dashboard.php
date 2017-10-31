<?php include("assets/includes/header.php"); ?>

  <fieldset>
    <table>
    <tr>
      <th>STUDENT NAME</th><th>COURSE NUMBER</th><th>VIEW</th><th>DELETE</th>
    </tr>

        <form>
    <?php
    require ('assets/db/mysql_connect.php');
    @mysqli_query($con, $fetchServeys);
        $rowNum = 0;
    foreach($surveys as $survey){
      ?>
      <tr class=<?php echo ($rowNum%2==0) ? "even" : "odd" ?>>
        <th></th><th></th><th></th><th><input type="checkbox" name="serveyToDelete" value=<?php ?>/></th>
      </tr>
    <?php
    $rowNum++;
  echo "</form>";
}
echo "
        </tr>
    </table>
  </fieldset>";

  include("assets/includes/footer.php");?>
