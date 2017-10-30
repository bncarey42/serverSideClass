<?php include("assets/includes/header.php"); ?>
<div class="content">
<?php

$order = $_POST['order'];

$totalPrice = 0.0;
$receipt = array();
//calculate order totals
foreach ($order as $key => $value){
	if($value != null && $value != 0){
		$title = getMenuEntryName($key);
		$price = $menu[$key][1] * $value;
		$totalPrice += $price;

		$receipt[] = array($value, $title, $price);
	}
}
//if no items in receipt
if(count($receipt) == 0){
	echo "<h2 class=\"alert\">EGADS!</h2>
	<p>It looks as though you did not input any menu selections.
	<br/>
	Return to the previous screen and make a selection.</p>";
	//else print out totals
} else {

	$saleTax = $totalPrice * $taxRate;
	$totalPrice += $saleTax;

	echo "<h3 class=\"miniHeader\">Thanks for your order of:</h3>";

	echo "<table>
		<tr class=\"menuHeader\">
			<th>#Ordered</th>
			<th>Drink Name</th>
			<th class=\"right\">Price</th>
		</tr>";

	foreach($receipt as $entry){
		echo "
			<tr>
				<th>$entry[0]</th>
				<th>$entry[1]</th>
				<th class=\"right\">$entry[2]</th>
			</tr>";
	}

	echo "
	<tr>
		<th></th>
		<th class=\"right\">Sales Tax:</th>
		<th class=\"right\">"; echo number_format($saleTax,2); echo"</th>
	</tr>
	<tr>
		<th> </th>
		<th class=\"right\">Total Sale:</th>
		<th class=\"right\">"; echo number_format($totalPrice,2); echo"</th>
	</tr>
	</table>";
echo "<div class=\"tips\">";
	echo "<div class=\"right\">Suggested tip amounts are:<ul>";
	$tips = array('15%' => 0.15, '18%' => 0.18, '20%' => 0.20);

	foreach ($tips as $gratuity => $percent) {
		$tip = $totalPrice * $percent;
		$newTotal = $totalPrice + $tip;
		echo"<li><strong>$gratuity tip: $"; echo number_format($tip,2); echo"</strong><br/>New Total: $";echo number_format($newTotal,2); echo"</li>";
	}
	echo"</ul>";
}
?>
		<form action="index.php" >
			<input class="button" type="submit" value="Return to the order screen"/>
		</form>
	</div>
	</div>
</div>
<?php include("assets/includes/footer.php"); ?>
