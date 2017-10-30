<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="assets/favicon/favicon.gif">
	<title>Calculate Box</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/style.css"/>
</head>
<body>
  <center>
    <h1>Calculate a Box!</h1>
    <img src="assets/images/cube.jpg" alt="Calculate a box!"/>
    <?php

      $hight_val = $_POST['hight'];
      $width_val = $_POST['width'];
      $depth_val = $_POST['depth'];
      if($hight_val <= 0 || $width_val <= 0 || $depth_val <= 0){
        echo "<div class=\"error\"><hr/><h3>ERROR</h3><p>Please return to the home page and input positive, non-zero values for each variable</p></div>";
      } else {
        echo "<h3>Hight = $hight_val</h3>";
        echo "<h3>Width = $width_val</h3>";
        echo "<h3>Depth = $depth_val</h3>";
        $volume = $hight_val * $width_val * $depth_val;
        echo "<hr/>";
        echo "<h3>Volume = $volume</h3>";
      }

    ?>
    <hr/>
    <form method="post" action="HW2Q1.html">
        <div class="buttons">
          <input type="submit" value="Home" title="Click here to return to home page"/>
        </div>
    </form>
  </center>
</body>
</html>
