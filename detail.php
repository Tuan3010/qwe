<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php
	if(isset($_GET['id'])):
		$id = $_GET['id'];
		include "products.php";
		foreach($products as $value):
			if($id == $value['id']):
	?>
	<div class='sanpham'>
		<img src='public/images/<?php echo $value['image'] ?>'>
		<h1><?php echo $value['name'] ?></h1>
		<b>Giá: </b> <span class='gia'><?php echo $value['price'] ?></span><br>
		<p><?php echo $value['desc'] ?></p>
		<a class="addcart" href="cart.php?id=<?php echo $value['id'] ?>">Add To Cart</a>
	</div>
	<?php endif; endforeach; endif;?>
</body>
</html>
