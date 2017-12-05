<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Kreon|Luckiest+Guy" rel="stylesheet">
  </head>
  <body>
    <center>
      <header>
        <h1>Welcome to MADLIBS</h1>
          <?php if (isset($_SESSION['uid'])) {
            $usrName = $_SESSION['uname'];
            echo "<p>You are currently logged on as $usrName. <a href='logOff.php'>Click here to Log off</a></p>";
          } ?>
      </header>
    <center>
