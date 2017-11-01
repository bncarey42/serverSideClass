<?php
  include("assets/db/q.php");
  $pageFiles = array(
    "Survey Home"=>"index.php",
    "Dashboard"=>"dashboard.php"
  );

  $styleFiles = array(
    "style.css",
    "headerStyle.css",
    "formStyle.css",
    "footerStyle.css"
  );

function sql_error(){
  echo "
    <div class=\"error\">
      <h3>An Error has occured</h3>
      <p>$errMsg</p>
      <p>We appologize for the inconvenience. We are working to resolve the problem that casued this error</p>
    </div>";
    echo mysqli_connect_error($dbc);
}
?>
