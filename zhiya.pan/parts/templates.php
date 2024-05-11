<?php


function productListTemplate($r,$o) {

return $r.<<<HTML

<a class="col-xs-12 col-md-3" href="product_item.php?id=$o->id">
	<figure class="figure product">

		<div class="overlay">
			<img src="$o->thumbnail" alt="">
			<div class="overlayInfo">
				<p>View</p>
			</div>
		</div>
		

		<figcaption>
			<div>$o->name</div>

			<div class="productIntro">$o->product_intro</div>
			<div>&dollar;$o->price</div>
		</figcaption>
	</figure>
	

</a>



HTML;

}


function selectAmount($amount=1,$total=10) {
    $output = "<select name='amount'>";
    for($i=1;$i<=$total;$i++) {
        $output .= "<option ".($i==$amount?"selected":"").">$i</option>";
    }
    
    $output .= "</select>";
    return $output;
}




function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount ($o->amount,10);
return $r.<<<HTML

<div class="display-flex">
	<div class="flex-none cart-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>

		<form action="cart_actions.php?action=delete-cart-item" method="post"> 
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="form-button inline" value="Delete" style="font-size: 0.8em;">
		</form>

	</div>

	<div class="flex-none">
		<div>&dollar;$totalfixed</div>

		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id">
			<div class="form-select">
				$selectamount
			</div>
		</form>

	</div>
</div>

HTML;
}


function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0) ;

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="card-section cart_price display-flex">
	<div class="flex-stretch"><strong>Sub Total</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div> 
</div>

<div class="card-section cart_price display-flex">
	<div class="flex-stretch"><strong>Taxes</strong></div>
	<div class="flex-none">&dollar;$taxfixed </div> 
</div>

<div class="card-section cart_price_total display-flex">
	<div class="flex-stretch"><strong>Total</strong></div>
	<div class="flex-none">&dollar;$taxedfixed </div> 
</div>

<a href="product_checkout.php" class="form-button">Checkout</a>


HTML;
}





/*Checkout page*/

function checkoutListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$amount = htmlspecialchars($o->amount);
return $r.<<<HTML

<div class="display-flex">
	<div class="flex-none cart-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>

	</div>

 <div class="flex-none">
        <div>&dollar;$totalfixed</div>
        <div>Quantity: $amount</div>  
    </div>
</div>

HTML;
}



function checkoutTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0) ;

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="card-section cart_price display-flex">
	<div class="flex-stretch"><strong>Sub Total</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div> 
</div>

<div class="card-section cart_price display-flex">
	<div class="flex-stretch"><strong>Taxes</strong></div>
	<div class="flex-none">&dollar;$taxfixed </div> 
</div>

<div class="card-section cart_price_total display-flex">
	<div class="flex-stretch"><strong>Total</strong></div>
	<div class="flex-none">&dollar;$taxedfixed </div> 
</div>

HTML;
}




function recommendedProducts($a){
$products = array_reduce($a,'productListTemplate');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}


function recommendedSimilar($id=0,$limit=4){
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` <> $id ORDER BY rand() LIMIT $limit");
	recommendedProducts($result);
}



























