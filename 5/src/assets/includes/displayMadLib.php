<?php
	include('assets/includes/header.php');
	if(isset($_SESSION['errMsg'])){
		echo $_SESSION['errMsg'];
    $_SESSION['errMsg'] = "";
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
</p>
<?php include('assets/includes/footer.php');?>
