<div class="assortment__item">
	<a href="#" class="assortment__link link"><img class="assortment__img" src="img/products/<?php echo $product['img'];?>" alt=""></a>
	<p class="assortment__title"><a class="assortment__link link" href="product_page.html"><?php echo $product['title']; ?></a></p>
	<span class="assortment__price"><?php echo $product['price']; ?> &#8381;</span>
	<form class="assortment__order" action="">
		<input class="assortment__buy-btn button" type="submit" value="Купить">
	</form>
</div>