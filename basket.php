<!DOCTYPE html>
<html lang="en">
	<?php include("templates/_head.php"); ?>
	<body>
		<div class="content">
			<?php include("templates/_header.php"); ?>
			<section class="basket">
				<div class="container">
					<h1 class="basket__title">Корзина</h1>
					<div class="basket__content">
						<table class="basket__table">
							<thead class="basket__table-head">
								<tr class="basket__table-row">
									<th class="basket__table-heading basket__table-heading_adaptive">Товар</th>
									<th class="basket__table-heading">Цена</th>
									<th class="basket__table-heading">Количество</th>
									<th class="basket__table-heading">Сумма</th>
									<th class="basket__table-heading"></th>
								</tr>
							</thead>
							<tbody class="basket__table-body">
								<tr class="basket__table-row">
									<td class="basket__table-data basket__table-product">
										<img class="basket__table-img" src="img/apple_watch.jpg" alt="Продукт">
										<a class="basket__table-link" href="product.html">apple watch</a>
									</td>
									<td class="basket__table-data basket__table-price">
										<span>75 000 &#8381;</span>
									</td>
									<td class="basket__table-data basket__counter">
										<div class="counter">
											<div class="counter__minus">
												<!-- <span>-</span> -->
											</div>
											<div class="counter__current">
												<input class="counter__input" type="text" value="1">
											</div>
											<div class="counter__plus">
												<!-- <span>+</span> -->
											</div>
										</div>
									</td>
									<td class="basket__table-data basket__table-total">
										<span>75 000 &#8381;</span>
									</td>
									<td class="basket__table-data basket__table-remove">
										<span>&times;</span> 
									</td>
									<td class="basket__table-data basket__table-break"></td>
								</tr>
								<tr class="basket__table-row">
									<td class="basket__table-data basket__table-product">
										<img class="basket__table-img" src="img/apple_watch.jpg" alt="Продукт">
										<a class="basket__table-link" href="product.html">apple watch</a>
									</td>
									<td class="basket__table-data basket__table-price">
										<span>75 000 &#8381;</span>
									</td>
									<td class="basket__table-data basket__counter">
										<div class="counter">
											<div class="counter__minus">
												<!-- <span>-</span> -->
											</div>
											<div class="counter__current">
												<input class="counter__input" type="text" value="1">
											</div>
											<div class="counter__plus">
												<!-- <span>+</span> -->
											</div>
										</div>
									</td>
									<td class="basket__table-data basket__table-total">
										<span>75 000 &#8381;</span>
									</td>
									<td class="basket__table-data basket__table-remove">
										<span>&times;</span> 
									</td>
									<td class="basket__table-data basket__table-break"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>
		<?php include("templates/_footer.php"); ?>
	</body>
</html>


