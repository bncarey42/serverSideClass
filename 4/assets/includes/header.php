<?php include("assets/includes/globalVars.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>University of OCairdha : Student Survey</title>
  <?php
    foreach ($styleFiles as $styleFile) {
      echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/style/$styleFile\" />";
    }

  ?>
  <link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville" rel="stylesheet">
</head>
<body>
  <header>
          <h1>OCairdha</h1>
          <img id='logo' src='assets/imgs/shield.png'/>
          <h1>University</h1>
          <p class="motto">Nuair amhras ort, léigh an doiciméadú</p>
    <div class="navMenu">
        <ul>
          <h3>
          <?php
            foreach ($pageFiles as $page => $file){
              echo "<a href=\"$file\"><li>$page</li></a>";
            }
           ?>
           </h3>
        </ul>
    </div>
  </header>
