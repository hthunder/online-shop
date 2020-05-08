<!DOCTYPE html>
<html lang="en">
	<?php include("templates/_head.php"); ?>
	<body>
		<div class="content">
			<?php include("templates/_header.php"); ?>
			<section class="product">
				<div class="container container_justify-content_center container_flex-direction_column">
					<div class="product__review">
						<h1 class="product__title"><?php echo $product['title']; ?></h1>
						<img class="product__img" src="img/products/<?php echo $product['img'];?>" alt="<?php echo $product['title']; ?>" >
						<span class="product__price"><?php echo $product['price']; ?></span>
						<form action="" class="product__order">
							<input class="product__order-button" type="submit" value="Добавить в корзину">
						</form>
					</div>
					<div class="product__description">
						<p class="product__description-text">
							<?php echo $product['description']; ?>
						</p>
					</div>
					<!-- <div class="product__description">
						<p class="product__description-text">
							Apple iPad Pro – это планшет под управлением iOS, сравнимый по мощности с ноутбуком или ПК. Процессор A12Z Bionic обеспечивает непрерывный уровень производительности без нагрева и мгновенный отклик при работе в многозадачном режиме. Стройте объёмные чертежи в графических программах или погружайтесь в мир виртуальной реальности – вы не заметите и намёка на промедления и баги.
						</p>
						<h2 class="product__description-title">
							НЕ ОТОРВАТЬ ВЗГЛЯДА
						</h2>
						<p class="product__description-text">
							На безрамочный дисплей Liquid Retina диагональю 12,9 дюйма выводится изображение со сверхточной цветопередачей, высокой яркостью, гармоничной контрастностью и широкими углами обзора. Такая картинка точно не оставит вас равнодушными!
						</p>
						<h2 class="product__description-title">
							БЕЗУСЛОВНЫЙ ПРОФИ
						</h2>
						<p class="product__description-text">
							Два широкоугольных объектива основной камеры с разрешением 10 и 12 Мп позволят запечатлеть важные моменты в самом лучшем качестве. Дополнительно вы сможете снимать кинематографическое видео в формате 4K. Студийного эффекта при этом добавит встроенная система микрофонов. И не беспокойтесь – памяти 128 Гб вам хватит на хранение всех файлов.
						</p>
						<h2 class="product__description-title">
							ПРЕКРАСНЫЕ АВТОПОРТРЕТЫ
						</h2>
						<p class="product__description-text">
							Фронталка 7 Мп служит не только для создания отличных селфи. Она играет ключевую роль в разблокировке экрана с помощью FaceID и позволяет общаться с близкими в бесчисленных мессенджерах.
						</p>
						<h2 class="product__description-title">
							НОВАЯ ВЕХА
						</h2>
						<p class="product__description-text">
							Невероятная по красоте и размеру бабочка приземляется на ваш кухонный стол, пока убранство зала превращается в средневековые покои. Это сон? Нет, с чувствительным сканером LiDAR вы с трудом отличите объекты дополненной реальности от настоящих физических предметов. Познавайте Вселенные различных игр или занимайтесь более приземлёнными делами. Например, планируйте расположение мебели и декора ещё до их покупки в приложении IKEA Place.
						</p>

						<h2 class="product__description-title">
							ДОСТОИН ВНИМАНИЯ
						</h2>
						<p class="product__description-text">
							Ёмкий аккумулятор обеспечит вам до 10 часов автономности. Работайте, творите, смотрите хоть целый день! Тонкий корпус из лёгкого и прочного алюминия весит меньше 700 г, так что Apple iPad Pro можно взять с собой в любые поездки.
						</p>

						<h2 class="product__description-title">
							ПЕРЕДАЧА ДАННЫХ
						</h2>
						<p class="product__description-text">
							Обменивайтесь информацией через Wi-Fi и Bluetooth. А для подключения аксессуаров используйте порт USB Type-C.
						</p>
					</div> -->
				</div>
			</section>
		</div>
		<?php include("templates/_footer.php"); ?>
	</body>
</html>