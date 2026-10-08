<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<?php 
	// ===========================================================
	// 1. Make variables for: pizza price, topping price, delivery fee, number of pizzas ordered, number of toppings per pizza, and number of people at the table.
	// 2. Calculate the total price of the order, and how many slices each person gets if each pizza has 8 slices.
	// 3. Echo out the results in a user-friendly way.
	// ===========================================================

	$pizza = [
		'price' => 19,
		'toppingPrice' => 5,
		'deliveryFee' => 4.50,
		'numberOrderedPizzas' => 6,
		'numberToppingsPerPizza' => 1,
		'numberPeopleAtTable' => 6,
		'slices' => 8,
	];

	$prijsTotalePizza = $pizza['price'] * 6;
	$prijsTotaleTopping = $pizza['toppingPrice'] * 6;
	$prijsTotaal = $prijsTotalePizza + $prijsTotaleTopping;
	$slicesTotaal = $pizza['slices'] * 8;

	echo "<p> De totale prijs voor de tafel is: ", $prijsTotaal, "$ </p>";
	echo "<p> Elk persoon krijgt ", $pizza['slices'], " pizza slices, wat in totaal: ",  $slicesTotaal , " pizza slices is. </p>";

	// Time: ?
	// Record: 6:59 Falco (2025)
	// Ready? Push to GIT!
	?>
	
    <a href="03-basic-operators.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="04-arrays.php class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>