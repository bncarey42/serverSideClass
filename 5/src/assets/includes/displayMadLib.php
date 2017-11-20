<?php
$updateMadLib = $_POST['updateMadLib'];
//set for scope
$plural_noun_one = '';
$plural_noun_two = '';
$adjective_one = '';
$noun_one = '';
$adjective_two = '';
$adjective_three = '';
$verb = '';
$body_part = '';
$adjective_four = '';
$number = '';
$noun_two = '';

switch ($updateMadLib) {
  case 'View MadLib':
    $mlid = $_POST['mlid'];
    getMadLibByID($mlid);
    break;
  case 'Delete'

    $mlid = $_POST['mlid'];
    getMadLibByID($mlid);

    $deleteMadLib="DELETE FROM cjohnson_qu5773oo.MadLib WHERE MAdLib_ID=\'$mlid\'";
    $r = @mysqli_query($dbc, $deleteMadLib);
    if($r) {
        echo "<h3>While we delete your MadLib here it is one last time before it is deleted forever.</h3>";
    }else {
        echo "<h3 class=\"error\">There was an error removing the mad lib from your account please return to your profile and try again</h3>"
    }
    break;
  case 'Submit MadLib'
    $plural_noun_one = $_POST['plural_noun_one'];
    $plural_noun_two = $_POST['plural_noun_two'];
    $adjective_one =   $_POST['adjective_one'];
    $noun_one =        $_POST['noun_one'];
    $adjective_two =   $_POST['adjective_two'];
    $adjective_three = $_POST['adjective_three'];
    $verb =            $_POST['verb'];
    $body_part =       $_POST['body_part'];
    $adjective_four =  $_POST['adjective_four'];
    $number =          $_POST['number'];
    $noun_two =        $_POST['noun_two'];
    $insertMadLib = "INSERT INTO cjohnson_qu5773oo.MadLib(USER_ID, plural_noun_one, plural_noun_two, adjective_one, noun_one, adjective_two, adjective_three,verb,body_part,adjective_four,number,noun_two)
    VALUES ($currentUID, $plural_noun_one, $plural_noun_two, $adjective_one, $noun_one, $adjective_two, $adjective_three, $verb, $body_part, $adjective_four, $number, $noun_two)";
    break;
  default:
  $plural_noun_one = $_POST['plural_noun_one'];
  $plural_noun_two = $_POST['plural_noun_two'];
  $adjective_one =   $_POST['adjective_one'];
  $noun_one =        $_POST['noun_one'];
  $adjective_two =   $_POST['adjective_two'];
  $adjective_three = $_POST['adjective_three'];
  $verb =            $_POST['verb'];
  $body_part =       $_POST['body_part'];
  $adjective_four =  $_POST['adjective_four'];
  $number =          $_POST['number'];
  $noun_two =        $_POST['noun_two'];
    break;
}

?>
<h2>MadLib</h2>
<p>
<h3>Jack and the <?php echo "$noun_one;"; ?></h3>
  <?php
  echo "Jack and his mother were so poor that they only had two old $plural_noun_one. Jack's mother sent him to the
  market to sell them for some $plural_noun_two. Jack ran into a $adjective_one women and traded her for some magic
  $noun_one. Jack planted the $noun_one, and soon, there was a/an $adjective_two stalk growing
  from the ground. Jack climbed up the stalk and reached a/an $adjective_three castle. He started to $verb when he
  heard the sound of a giant approaching. A voice boomed, \"Fee fi fo fum, I smell the $body_part of an
  Englishman.\" The $adjective_four giant chased him down the beanstalk, which Jack cut with an ax. Luckily, jack
  stole the giant's goose that laid $number golden $noun_two for him and his mother.";
  ?>
  <form action="user.php" method="post">
    <input type="text" value="$plural_noun_one" hidden="hidden" />
    <input type="text" value="$plural_noun_two" hidden="hidden" />
    <input type="text" value="$noun_one" hidden="hidden" />
    <input type="text" value="$adjective_two" hidden="hidden" />
    <input type="text" value="$adjective_three" hidden="hidden" />
    <input type="text" value="$verb" hidden="hidden" />
    <input type="text" value="$body_part" hidden="hidden" />
    <input type="text" value="$adjective_four " hidden="hidden" />
    <input type="submit" class="button" value="Return to Profile"/>
  </form>
</p>


<?php

function getMadLibByID($mlid){
  $getMadLibByID = "SELECT MadLib_ID as mlid, USER_ID as uid, plural_noun_one as plural_noun_one,
    plural_noun_two as plural_noun_two, adjective_one as adjective_one, noun_one as noun_one,
    adjective_two as adjective_two, adjective_three as adjective_three, verb as verb,
    body_part as body_part, adjective_four as adjective_four, number as number, noun_two as noun_two
    FROM cjohnson_qu5773oo.MadLib WHERE MadLib_ID = \'$mlid\'";

    require ('assets/db/mysqli_connect.php');
    $r = @mysqli_query($dbc, $getMadLibByID);
    if($r){
      while($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
        $plural_noun_one = $row['plural_noun_one'];
        $plural_noun_two = $row['plural_noun_two'];
        $adjective_one = $row['adjective_one'];
        $noun_one = $row['noun_one'];
        $adjective_two = $row['adjective_two'];
        $adjective_three = $row['adjective_three'];
        $verb = $row['verb'];
        $body_part = $row['body_part'];
        $adjective_four = $row['adjective_four'];
        $number = $row['number'];
        $noun_two = $row['noun_two'];
        }
        mysqli_close($dbc);
}
