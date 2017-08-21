<?php
$path = "products.txt";
$string = file_get_contents($path);
$string = preg_replace('/\s+/', '', $string);
$array = json_decode($string, true);
echo $array[$product];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
<table>
    <?php
    foreach ($array as $product => $value){
	        echo "<tr><td>$product</td><td>$value</td><td><button>Delete</button></td></tr>";
    }
    ?>
</table>
<a href="addProduct.php">Add new product</a>
</body>
</html>