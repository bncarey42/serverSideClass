<?php
  include('assets/includes/globalVars.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      foreach ($styleFiles as $styleFile) {
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/style/$styleFile.css\" />";
      }
    ?>
    <link href="https://fonts.googleapis.com/css?family=Kreon|Luckiest+Guy" rel="stylesheet">
  </head>
  <body>
    <center>
        <header>
                <h1>Welcome to MADLIBS</h1>
          <div class="navMenu">
              <ul>
                <?php
                if($loggedOn){
                  foreach ($pageFiles as $page => $file){
                    echo "<a href=\"$file\"><li>$page</li></a>";
                  }
                }
                ?>

              </ul>
          </div>
        </header>
        <center>
