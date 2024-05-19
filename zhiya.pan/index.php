<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

	<?php include "parts/meta.php"; ?>
	
</head>
<body>


	<!-- Nav -->


	<?php include "parts/navbar.php"; ?>


	<!-- Hero -->

<!-- 
	<div class="container hero">
		<img img src="img/PomDog.png" alt="Pomeranian Dog">
		<div class="hero-text">
			<h1>Everything about<br> our paw friends</h1>
	        <p>Bringing joy to every wag and purr with our exclusive<br> selection of premium Korean pet toys.</p>
	        <button class="heroAbout"><a href="About.php">About</a></button>
			<button class="heroShop"><a href="product_list.php">Shop now</a></button>
		</div>
	</div>
 -->

	<div class="container">
		<div class="hero">
				<img class="heroImage" src="img/PomDog.png" alt="Pomeranian Dog">
				<div class="heroContent">
					<h1>Everything about<br> our paw friends</h1>
					<p>Bringing joy to every wag and purr with our exclusive<br> selection of premium Korean pet toys.</p>
					<button class="heroAbout"><a href="About.php">About</a></button>
					<button class="heroShop"><a href="product_list.php">Shop now</a></button>
				</div>
		</div>
	</div>

	<div class="line"></div>



	<!-- Intro -->

	<div class="intro">
		<img class="introLogo" src="img/Logo-large.png" alt="Logo">
		<h2>What we believe</h2>
		<p>At DOBOKI, we believe that every pet deserves the joy of play and discovery. We trust in the power of quality and innovation to enhance the lives of pets and their owners alike. We value the strong bond between pets and their families, striving to strengthen it with every product we offer.</p>
	</div>






	<!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40 -->
	
	<div class="view-window" style="background-image: url(img/dogplay.png);">
	</div>




	<div class="container popular_items">
		
			<h2>Popular</h2>



			<?php

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `price`
				LIMIT 4
				"
			);

			echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate');"<div>";


			?>

	</div>
</div>

	

	<!-- bottom -->

	<div class="bottom">
		<h3>Doboki</h3>
		<p>Located in San Francisco</p>
	</div>







</body>
</html>

 


