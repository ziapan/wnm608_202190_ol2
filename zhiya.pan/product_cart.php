<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";


$cart = getCart();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container cart-items-layout">
		<h2>Your cart</h2>

		<?php 

		if(count($cart)) {
			?>
			<div class="grid gap ">
				<div class="col-xs-12 col-md-12">				
					<?= array_reduce(getCartItems(),'cartListTemplate') ?>
				</div>
			</div>


			<?php
		} else{
			?>
			<div>
				Your cart is empty
			</div><br>
			<p><a href="product_list.php">Go Shopping</a></p><br>

			<?php
		}

		?>
		<div class="container">
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?> 	
				</div>
			</div>
		</div>
	
	</div>
	
</body>
</html>