<?php
function getMadLib($mlid){
  $madLib = array();
  $getMadLibByID = "SELECT * FROM cjohnson_qu5773oo WHERE MadLib_ID = \'$mlid\'";
  require ('mysqli_connect.php');
  $r = @mysqli_query($dbc, $selectUserNameByUid);
  if($r){
    $i=0;
   while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
    $madLib = $row['$i++'];
   }
  }
   return $madLib;
}
?>
