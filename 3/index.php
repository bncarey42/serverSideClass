<?php include("assets/includes/header.php"); ?>
<div class="content">

  <?php include("assets/includes/about.php"); ?>

  <h2 class="header">Menu</h2>
	<form method="post" action="receipt.php">
	<table>
		<?php
    echo "
    <tr>
      <th></th>
      <th class=\"menuHeader\">Drink and Description</th>
      <th class=\"menuHeader\">Price</th>
      <th class=\"menuHeader\">How Many?</th>
    </tr>";
		foreach ($menu as $key => $value) {
		    $entryName = getMenuEntryName($key);
			  echo "
        <tr>
				    <th></th>
				    <th><h3 class=\"miniHeader\">$entryName</h3><p>$value[0]</p></th>
				    <th><p class=\"price\">$value[1]</p></th>
            <th><input class=\"quantity\" type=\"number\" name=\"order[$key]\"/></th>
			  </tr>";
		  }
		?>
		</table>
		<br/>
		<input class="button" type="submit" value="Submit Order" />
		<input class="button" type="reset" value="Reset"/>

	</form>
</div>
<?php include("assets/includes/footer.php");?>
