<div class="contact">
<?php
$iconFolder = "assets/images/icons/";

$social = array("Facebook" => array($iconFolder . "facebook.png", "https://www.facebook.com/PrairieHomeCompanion/"),
                "Twitter" => array($iconFolder . "twitter.png", "https://twitter.com/prairie_home"),
                "YouTube" => array($iconFolder . "youtube.png", "https://www.youtube.com/user/PrairieHomeVideos"),
                "Wikipedia" => array($iconFolder . "wiki.png","https://en.wikipedia.org/wiki/A_Prairie_Home_Companion"));
echo "<ul>";
  foreach ($social as $key => $value) {
    echo "<li>
        <a href=\"$value[1]\" target=\"blank\">
          <img src=\"$value[0]\" title=\"$key\"/>
        </a>
      </li>";
  }
echo "</ul>";
?>
</div>
