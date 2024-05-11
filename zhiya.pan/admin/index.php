<?php

include "../lib/php/functions.php";


$empty_product = (object)[
	"name"=>"New monster",
	"description"=>"This is a new version of a toy monster",
	"product_intro"=>"a new version of a toy monster",
	"price"=>"15.99",
	"thumbnail"=>"img/Products/toy_Monster_thumb.png",
	"images"=>"img/Products/toy_Monster_1.png",
	"quantity"=>"4"
];



//LOGIC

try{
	$conn = makePDOConn();
	switch($_GET['action']){
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`price`=?,
					`quantity`=?,
					`description`=?,
					`product_intro`=?,
					`thumbnail`=?,
					`images`=?
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-quantity'],
				$_POST['product-description'],
				$_POST['product-product_intro'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;


		case "create":
		$statement = $conn->prepare("INSERT INTO
				`products`
				(				
					`name`,
					`price`,
					`quantity`,
					`description`,
					`product_intro`,
					`thumbnail`,
					`images`
				)
				VALUES (?,?,?,?,?,?,?)
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-quantity'],
				$_POST['product-description'],
				$_POST['product-product_intro'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
			]);
			$id = $conn->lastInsertId();

			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;


		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
				$statement->execute([$_GET['id']]);

			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}catch(PDOException$e){
	die($e->getMessage());
}







//Templates
function productListItem($r,$o){
return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none cart-thumbs"><img src="./$o->thumbnail"></div>
		<div class="flex-stretch" style="padding: 1em">$o->name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
</div>
HTML;
}





function showProductPage($o){


$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(", ", $o->images),function($r,$o){return $r."<img src='$o'>";});



//heredoc

$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Quantity</label>
		<span>$o->quantity</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Product Intro</label>
		<span>$o->product_intro</span>
	</div>
	<div class="form-control">
		<label class="form-label">thumbnail</label>
		<span class="cart-thumbs"><img src='./$o->thumbnail'></span>
	</div>
	<div class="form-control">
		<label class="form-label">Other Images</label>
		<span class="cart-thumbs">$images</span>
	</div>
</div>
HTML;


$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit Product</h2>
	<div class="form-control">
		<label class="form-label" for="product-name">Name</label>
		<input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter the product name">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-price">Price</label>
		<input class="form-input" name="product-price" id="product-price" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the price">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-quantity">Quantity</label>
		<input class="form-input" name="product-quantity" id="product-quantity" type="Number" min="0" max="1000" step="1" value="$o->quantity" placeholder="Enter the quantity">
	</div>	
	<div class="form-control">
		<label class="form-label" for="product-description">Description</label>
		<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the description">$o->description</textarea>
	</div>	
	<div class="form-control">
		<label class="form-label" for="product-product_intro">Product intro</label>
		<textarea class="form-input" name="product-product_intro" id="product-product_intro" type="text" placeholder="Enter the product intro">$o->product_intro</textarea>
	</div>	
	<div class="form-control">
		<label class="form-label" for="product-thumbnail">Thumbnail</label>
		<input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the thumbnail">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-images">Images</label>
		<input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the images">
	</div>


	<div class="form-control">
		<input class="form-button" type="submit" value="Update">
	</div>
</form>
HTML;

$output = $id == "new" ? "<div class='card soft'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div> <div class="flex-none">$delete</div>
</nav>
$output
HTML;
}







?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Admin page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li> 
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li> 
				</ul>
			</nav>
		</div>
		
	</header>

	<div class="container">

			<?php 
				if(isset($_GET['id'])) {

					showProductPage(
						$_GET['id']=="new" ?
						$empty_product :
						makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
					);

				} else {

					?>
					<h2>Prodcut list</h2>
					<?php

					$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `price` DESC");

					echo array_reduce($result,'productListItem');

					?>

				<?php }	?> 
						


	</div>
</body>
