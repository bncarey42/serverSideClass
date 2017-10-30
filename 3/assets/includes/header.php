<?php include("assets/includes/globalVariables.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Gutenburg Pressed Juice</title>
  <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/style/headerStyle.css" />
  <link rel="stylesheet" type="text/css" href="assets/style/footerStyle.css" />
  <link rel="stylesheet" type="text/css" href="assets/style/menu.css" />
  <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer|UnifrakturMaguntia" rel="stylesheet">
</head>
<body>
  <center>
    <!-- Image found at imgarcade.com/originalgutenburg-press Copyright @ 2017 - www.imgarcade.com
          image direct link: https://static.guim.co.uk/sys-images/BOOKS/Pix/pictures/2011/6/21/1308650746964/Gutenberg-press-007.jpg
        --edited-- -->
    <img id="headerImg" src="http://www.mncompsci.site/mncompsci.site/qu5773oo/HW3/assets/images/Gutenberg-press-007.png" alt="Welcome to">

    <h1 id="Gutenburg">Gutenburg Pressed Juice</h1>
    <div class="navMenu">
        <ul>
          <h3>
          <?php
            for ($i=0; $i < count($pageNames); $i++) {
              echo "<a href=\"$pageFiles[$i]\"><li>$pageNames[$i]</li></a>";
            }
           ?>
           </h3>
        </ul>

    </div>
