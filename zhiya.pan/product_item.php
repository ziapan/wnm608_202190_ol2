<?php

include_once "lib/php/functions.php";

$product = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product ->images);


$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='$o'>";
});

//print_p($product);


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	
	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container product_itemMain">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				
					<div class="images-main">
						<img src="<?= $product->thumbnail ?>">
					</div>

				
			</div>
			<div class="col-xs-12 col-md-5">
				
					<h2 class="product_name"><?= $product->name ?></h2>
					<div class="product_price">&dollar;<?= $product->price ?></div>


					<div class="card-section">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select" id="product-amount">
							<select>
								<option>1</option> 
								<option>2</option> 
								<option>3</option> 
								<option>4</option>
								<option>5</option> 
								<option>6</option> 
								<option>7</option> 
								<option>8</option>
								<option>9</option> 
								<option>10</option> 
							</select>
						</div>
					</div>




					<div>
						<a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a>
					</div>

				
			</div>


		</div>
	</div>


	<div class="container">

		<div class="product_itemInfo">

			<h3>Description</h3>
				<div class="line"></div>
				<div class="product_description"><?= $product->description ?></div>
				<div class="images-thumbs">
					<?= $image_elements ?>
				</div>
		</div>
	</div>


	
</body>
</html>