<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Product List</title>

	<?php include "parts/meta.php"; ?>


	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/products_list.js"></script>


</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Product">
				</form>
			</div>

			<div class="form-control">
				<div class="card soft">
				<div class="display-flex">
					<div class="flex-stretch display-flex">
						<div class="flex-none">
							<button data-filter="category" data-value="" type="button" class="form-button">All</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="SniffToys" type="button" class="form-button">Sniff Toys</button>
						</div>
						<div class="flex-none">
							<button data-filter="category" data-value="FetchToys" type="button" class="form-button">Fetch Toys</button>
						</div>
					</div>
					<div class="flex-none">
						<div class="form-select item_form_select">
							<select class="js-sort">
								<option value="1">High to low</option> 
								<option value="2">Low to high</option> 
							</select>
						</div>
					</div>
				</div>
			</div>
	


			<div class='productlist grid gap'></div>
	</div>


	



</body>
</html>