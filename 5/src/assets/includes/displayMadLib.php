<?php
$plural_noun_one = $_POST('plural_noun_one');
$plural_noun_two = $_POST('plural_noun_two');
$noun_one = $_POST('noun_one');
$adjective_two = $_POST('adjective_two');
$adjective_three = $_POST('adjective_three');
$verb = $_POST('verb');
$body_part = $_POST('body_part');
$adjective_four = $_POST('adjective_four');
$number = $_POST('number');
$noun_two = $_POST('noun_two');
?>
<p>
  <?php
  echo "Jack and his mother were so poor that they only had two old $plural_noun_one. Jack's mother sent him to the
  market to sell them for some $plural_noun_two. Jack ran into a $adjective_one women and traded her for some magic
  $noun_one. Jack planted the [repeat same noun as before], and soon, there was a/an $adjective_two stalk growing
  from the ground. Jack climbed up the stalk and reached a/an $adjective_three castle. He started to $verb when he
  heard the sound of a giant approaching. A voice boomed, \"Fee fi fo fum, I smell the $body_part of an
  Englishman.\" The $adjective_four giant chased him down the beanstalk, which Jack cut with an ax. Luckily, jack
  stole the giant's goose that laid $number golden $noun_two for him and his mother.";
  ?>
  <form action="profile.php" method="post">
    <input type="text" value="$plural_noun_one" hidden="hidden" />
    <input type="text" value="$plural_noun_two" hidden="hidden" />
    <input type="text" value="$noun_one" hidden="hidden" />
    <input type="text" value="$adjective_two" hidden="hidden" />
    <input type="text" value="$adjective_three" hidden="hidden" />
    <input type="text" value="$verb" hidden="hidden" />
    <input type="text" value="$body_part" hidden="hidden" />
    <input type="text" value="$adjective_four " hidden="hidden" />
    <input type="submit" value="Save MadLib" name="saveMadLib"/>
    <input type="submit" value="Don't Save MadLib" name="saveMadLib"/>
  </form>
</p>
