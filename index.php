<!DOCTYPE html>
<html lang="en">
	<?php include("templates/_head.php"); ?>
	<body>
		<div class="content">
			<?php include("templates/_header.php") ?>
			<section class="promo">
				<div class="container">
					<div class="promo__inner">
						<div class="promo__item item">
							<img class="item__img" src="img/reload.svg" alt="">
							<p class="item__text">30 Дней на возврат</p>
						</div>
						<div class="promo__item item">
							<img class="item__img" src="img/truck.svg" alt="">
							<p class="item__text">Бесплатная доставка</p>
						</div>
						<div class="promo__item item">
							<img class="item__img" src="img/tools.svg" alt="">
							<p class="item__text">Расширенная гарантия</p>
						</div>
						<div class="promo__item item">
							<img class="item__img" src="img/gift.svg" alt="">
							<p class="item__text">Широкий ассортимент</p>
						</div>
					</div>
				</div>
			</section>			
			<section class="latest-products">
				<div class="container">
					<div class="latest-products__title">
						<h2 class="latest-products__title-text">Последние поступления</h2>
					</div>
					<div class="latest-products__items">
						<div class="latest-products__container">
							<a class="link" href="#">
								<img class="latest-products__item" src="img/macbook_air.jpg" alt="macbook air">
							</a>
						</div>
						<div class="latest-products__container">
							<a class="link" href="#">
								<img class="latest-products__item" src="img/ipad_pro_2020_12_9.jpg" alt="ipad pro">
							</a>
						</div>
						<div class="latest-products__container">
							<a class="link" href="#">
								<img class="latest-products__item" src="img/apple_watch.jpg" alt="apple watch">
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="subscription">
				<div class="container container_justify-content_center">
					<div class="subscription__item">
						<h3 class="subscription__title">iStore</h3>
						<p class="subscription__text">
							Мы тщательно следим за качеством продукции, которую продаем. А большой опыт работы позволяет 
							нам торговать продукцией по наиболее низкой цене и регулярно проводить скидки.
							Доставка товаров по всей России. В Москве – бесплатно. Наши курьеры привезут и поднимут товар на нужный этаж.
							«iStore» — техника уюта и комфорта в вашем доме. Мы делаем все, чтобы наш покупатель был доволен. 
							Приходите и убедитесь в этом сами!
						</p>
						<div class="social">
							<a class="social__link" href="#" >
								<img src="img/vk.svg" alt="">
							</a>
							<a class="social__link" href="#" >
								<img src="img/facebook.svg" alt="">
							</a>
							<a class="social__link" href="#" >
								<img src="img/twitter.svg" alt="">
							</a>
							<a class="social__link" href="#" >
								<img src="img/instagram.svg" alt="">
							</a>
						</div>
					</div>
					<div class="subscription__item">
						<h3 class="subscription__title">Новости</h3>
						<p class="subscription__text">Подписывайтесь на нашу рассылку, чтобы 
							быть в курсе в последних новостей и первыми
							узнавать о наших новых акциях
						</p>
						<form class="subscription__form">
							<input class="form__email" type="email" placeholder="Ваш email">
							<input class="button button_text_uppercase" type="button" value="Подписаться">
						</form>
					</div>
				</div>
			</section>
		</div>
		<?php include("templates/_footer.php") ?>
	</body>
</html>