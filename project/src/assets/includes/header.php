<?php session_start(); include('assets/includes/functions.php'); ?>
<!DOCTYPE HTML>
<head>
  <title>PHPlayer</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Ubuntu" rel="stylesheet">
</head>
<body>
    <table class="topBar">
      <tr>
        <td id='topLeft'><h1><a href="library.php">PHPLAYER</a></h1></td>
        <td id='topRight'>
          <?php if($_SESSION['loggedOn']){
          $userName=$_SESSION['uname'];
          echo "
            <h5>Hello $userName! <a href='logOff.php'>Click Here</a> to Log Off.</h5>";
        } ?></td>
      </tr>
    </table>
  <center>
