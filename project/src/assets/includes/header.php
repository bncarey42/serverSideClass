<?php session_start(); include('assets/includes/functions.php'); ?>
<!DOCTYPE HTML>
<head>
  <title>PHPlayer</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="topBar">
    <table>
      <tr>
        <td class="topLeft">PHPLAYER</td>
        <td class="topRight"><?php if($_SESSION['loggedOn']){echo "<h4>Hello $_SESSION['$uname']! Click Here to <a href='logOff.php'>Log Off</a>.</h4>";} ?> </td>
      </tr>
    </table>
  </section>
  <center>
