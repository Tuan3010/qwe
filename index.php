<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chu</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<body>
	<?php 
	// include "products.php";
    require "config.php";
    require "models/db.php";
    require "models/product.php";
    $product = new Product;
    //$protype = new Protype;
    //$getAllProtypes = $protype -> getAllProtype();
    $getAllProduct = $product -> getAllProduct();
    //var_dump($getAllProduct);

	foreach($getAllProduct as $value):
	?>
	<div class='sanpham'>
		<img src='public/images/<?php echo $value['image'] ?>'>
		<h1><a href='detail.php?id=<?php echo $value['id'] ?>'><?php echo $value['name'] ?></a></h1>
		<b>Giá: </b> <span class='gia'><?php echo $value['price'] ?> VND</span><br>
		<p><?php echo substr($value['description'],0,50) ?><a href='detail.php?id=<?php echo $value['id'] ?>'>[...]</a></p>
	</div>
	<?php endforeach; ?>
</body>
</html>
