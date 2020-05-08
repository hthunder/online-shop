<header class="header">
	<div class="container container_justify-content_center">
		<div class="header__logo">
			<a class="link header__logo-link " href="index.php">iStore<a>
		</div>
		<nav class="nav header__nav">
			<ul class="nav__list">
				<li class="nav__item"><a class="link nav__link" href="index.php">Главная</a></li>
				<li class="nav__item"><a class="link nav__link" href="products.php">Товары</a></li>
				<li class="nav__item"><a class="link nav__link" href="basket.php">Корзина</a></li>
				<!-- Trigger/Open The Modal -->
				<li class="nav__item"><a class="link nav__link" id="modalBtn" href="">Войти</a></li>
				<!-- The Modal -->
				<?php include ("_modal.php") ?>
				<!-- <li class="nav__item"><a class="link nav__link" href="#" >Личный кабинет</a></li> Появляется после входа-->
				<li class="nav__item"><a class="link nav__link" href="delivery.php">Доставка</a></li>
			</ul>
		</nav>
		<div class="header__basket">
			<a class="link header__link" href="basket.php"><img class="header__basket-img"
					src="img/commerce-and-shopping.svg" alt="Корзина"></a>
		</div>
	</div>
</header>