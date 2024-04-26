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

//print_p($_SESSION);


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
				<form method="post" method="post" action="cart_actions.php?action=add-to-cart">

					<input  type="hidden" name="product-id" value="<?= $product->id ?>">
				
					<h2 class="product-name"><?= $product->name ?></h2>
					<div class="product-price">&dollar;<?= $product->price ?></div>


					<div class="card-section">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select item_form_select">
							<select id="product-amount" name="product-amount">
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
						<input type="submit" class="form-button" value="Add To Cart">
					</div>

				</form>


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