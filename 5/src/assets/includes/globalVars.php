<?php
$styleFiles = array('style','form' );

function getMadLib($mlid){
  //declare for scope
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


  require '../SQL_CONNECT';
  $getMadLibByID = "SELECT MadLib_ID as mlid, USER_ID as uid, plural_noun_one as plural_noun_one,
    plural_noun_two as plural_noun_two, adjective_one as adjective_one, noun_one as noun_one,
    adjective_two as adjective_two, adjective_three as adjective_three, verb as verb,
    body_part as body_part, adjective_four as adjective_four, number as num, noun_two as noun_two
    FROM cjohnson_qu5773oo.MadLib WHERE MadLib_ID = '$mlid'";

    require('assets/db/mysqli_connect.php');
    $r=@mysqli_query($conn, $getMadLibByID);
    $madLib='';
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
          $number = $row['num'];
          $noun_two = $row['noun_two'];
        }
        mysqli_close($conn);

        $madLib = "Jack and his mother were so poor that they only had two old $plural_noun_one. Jack's mother sent him to the
        market to sell them for some $plural_noun_two. Jack ran into a $adjective_one women and traded her for some magic
        $noun_one. Jack planted the $noun_one, and soon, there was a/an $adjective_two stalk growing
        from the ground. Jack climbed up the stalk and reached a/an $adjective_three castle. He started to $verb when he
        heard the sound of a giant approaching. A voice boomed, \"Fee fi fo fum, I smell the $body_part of an
        Englishman.\" The $adjective_four giant chased him down the beanstalk, which Jack cut with an ax. Luckily, jack
        stole the giant's goose that laid $number golden $noun_two for him and his mother.";
      }
    return $madLib;
}
?>
