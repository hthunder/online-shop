<!DOCTYPE html>
<html lang="en">

<?php include("templates/_head.php"); ?>

<body>
	<div class="content">
		<?php include("templates/_header.php"); ?>
		<section class="delivery">
			<div class="container">
				<h1 class="title-1">Доставка и оплата</h1>
				<div class="delivery__info">
					<section class="delivery__time-section">
						<p class="delivery__text">Минимальная сумма заказа - 500 рублей.</p>
						<p class="delivery__text">Заказы поступившие:</p>
						<ul class="delivery__list">
							<li class="deliver__list-item"><strong class="delivery__order-time">до 14.00:</strong> доставка на следующий рабочий день.</li>
							<li class="deliver__list-item"><strong class="delivery__order-time">после 14.00:</strong> доставка через один рабочий день.</li>
						</ul>
						<p class="delivery__text">Временные промежутки доставки:</p>
						<ul class="delivery__list">
							<li class="deliver__list-item"><strong class="delivery__time">с 9.00 до 15.00;</strong></li>
							<li class="deliver__list-item"><strong class="delivery__time">с 15.00 до 21.00</strong></li>
						</ul>
					</section>
					<section class="delivery__terms">
						<div class="delivery__terms-item">
							<div class="delivery__type">Курьером по Москве внутри МКАД</div>
							<div class="delivery__type-terms">
								При заказе до 3000 рублей: стоимость доставки 300 рублей.
								При заказе больше 3000 рублей: доставка БЕСПЛАТНО.
							</div>
						</div>
						<div class="delivery__terms-item">
							<div class="delivery__type">Доставка курьером по Москве за МКАД</div>
							<div class="delivery__type-terms">
								Осуществляется в пределах пешей доступности от метро. При заказе до 5000 рублей: стоимость доставки 350 рублей. При заказе больше 5000 рублей: доставка БЕСПЛАТНО. Доставка за МКАД, где нет метро, осуществляется по договоренности по тарифу 300 рублей + 30 рублей за каждый км от МКАД
							</div>
						</div>
						<div class="delivery__terms-item">
							<div class="delivery__type">Самовывоз бесплатно</div>
							<div class="delivery__type-terms">
								Из шоурума в Москве по адресу: ул. Воронцовская, д. 27/35 с1 (цокольный этаж) по предварительной договоренности
							</div>
						</div>
						<div class="delivery__terms-item">
							<div class="delivery__type">Доставка по России</div>
							<div class="delivery__type-terms">
								Транспортной компанией Boxberry или Почтой России от 180 руб.
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
	</div>

	<?php include("templates/_footer.php"); ?>
</body>

</html>