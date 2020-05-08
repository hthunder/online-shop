<?php 
	include("core/module_global.php");
	if(isset($_GET['category']))
		$res = getProducts($con, trim($_GET['category']));
	else
		$res = getProducts($con);
	mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
	<?php include("templates/_head.php") ?>
	<body>
		<div class="content">
			<?php include("templates/_header.php"); ?>
			<section class="assortment">
				<div class="container container_align-items_flex-start container_justify-content_center">
					<div class="assortment__filter-wrapper">
						<ul class="filter">
							<li class="filter__element filter__element_active"><a href="products.php" class="filter__link link">Все товары</a></li> <!-- Проверить стили nav__element -->
							<li class="filter__element"><a href="products.php?category=Телефоны" class="filter__link link">Телефоны</a></li>
							<li class="filter__element"><a href="products.php?category=Планшеты" class="filter__link link">Планшеты</a></li>
							<li class="filter__element"><a href="products.php?category=Ноутбуки" class="filter__link link">Ноутбуки</a></li>
							<li class="filter__element"><a href="products.php?category=Компьютеры" class="filter__link link">Компьютеры</a></li> 
						</ul>
					</div>
					<div class="assortment__grid">
						<?php
							while($product = mysqli_fetch_array($res)) {
								include("templates/_assortment-item.php");
							}
						?>
					</div>
				</div>
			</section>
		</div>
		<?php include("templates/_footer.php"); ?>
	</body>
</html>