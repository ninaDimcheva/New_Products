<?php
$path = "products.txt";
$f = fopen($path, "a");
$product = null;
$quantity = null;
if(isset($_POST['submit'])){
	$product = $_POST['name'];
	$quantity = $_POST['quantity'];
	$json = json_decode(file_get_contents($path), true);
	$json[$product] = $quantity;
	file_put_contents($path, json_encode($json));
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
<form method="post">
	Name:
	<input type="text" name="name" required>
	<br/>
	Quantity:
	<input type="number" name="quantity" required>
	<br/>
	<input type="submit" value="Add" name="submit">
	<a href="products.php">View all</a>
</form>
</body>
</html>