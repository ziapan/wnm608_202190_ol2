
const listItemTemplate = templater(o=>`
	<a class="col-xs-12 col-md-3" href="product_item.php?id=${o.id}">
	<figure class="figure product">

		<div class="overlay">
			<img src="${o.thumbnail}" alt="">
			<div class="overlayInfo">
				<p>View</p>
			</div>
		</div>
		

		<figcaption>
			<div>${o.name}</div>

			<div class="productIntro">${o.product_intro}</div>
			<div>&dollar;${o.price}</div>
		</figcaption>
	</figure>
	

	</a>
	`);
