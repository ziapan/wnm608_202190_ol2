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


function cartListTemplate($r,$o){
return $r.<<<HTML

<div class="display-flex">
	<div class="flex-none cart-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>
</div>

HTML;
}