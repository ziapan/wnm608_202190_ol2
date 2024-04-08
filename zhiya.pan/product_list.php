<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<ul>
				<li><a href="product_item.php?id=1">Pet Product 1</a></li>
				<li><a href="product_item.php?id=2">Pet Product 2</a></li>
				<li><a href="product_item.php?id=3">Pet Product 3</a></li>
				<li><a href="product_item.php?id=4">Pet Product 4</a></li>
			</ul>
		</div>
	</div>


	
</body>
</html>


<h2 class="popularTopic">Product List with img</h2>

			<div class="grid gap" id="popularGrid">
				<div class="col-xs-12 col-md-3">
					<figure class="figure product">

						<a href="product_item.php?id=1">
						<div class="overlay">
							<img src="img/product1.png" alt="toy1">
							<div class="overlayInfo">
								<p>View</p>
							</div>
						</div>
						</a>

						<figcaption>
							<div>BiteMe</div>
							<div class="productIntro">My Little Animal Friends toy</div>
							<div>$12.99</div>
						</figcaption>
					</figure>
				</div>


				<div class="col-xs-12 col-md-3">		
					<figure class="figure product">

						<a href="product_item.php?id=2">
						<div class="overlay">
							<img src="img/product2.png" alt="toy2">
							<div class="overlayInfo">
								<p>View</p>
							</div>
						</div>
						</a>

						<figcaption>
							<div>Cake</div>
							<div class="productIntro">3 in one Happy Bark Day Cake</div>
							<div>$24.00</div>
						</figcaption>
					</figure>
				</div>


				<div class="col-xs-12 col-md-3">		
					<figure class="figure product">

						<a href="product_item.php?id=3">
						<div class="overlay">
							<img src="img/product3.png" alt="toy3">
							<div class="overlayInfo">
								<p>View</p>
							</div>
						</div>
						</a>

						<figcaption>
							<div>BiteMe</div>
							<div class="productIntro">Mushroom Nose Toy</div>
							<div>$8.00</div>
						</figcaption>
					</figure>		
				</div>	


				<div class="col-xs-12 col-md-3">		
					<figure class="figure product">

						<a href="product_item.php?id=4">
						<div class="overlay">
							<img src="img/product4.png" alt="toy4">
							<div class="overlayInfo">
								<p>View</p>
							</div>
						</div>
						</a>

						<figcaption>
							<div>Cup Noddle</div>
							<div class="productIntro">A nose work crinkling cup</div>
							<div>$22.00</div>
						</figcaption>
					</figure>		
				</div>	

			</div>