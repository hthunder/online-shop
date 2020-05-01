<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rush_shop";
	$con = mysqli_connect($servername, $username, $password);
	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	mysqli_query($con, "DROP DATABASE IF EXISTS $dbname");
	mysqli_query($con, "CREATE DATABASE IF NOT EXISTS $dbname");
	mysqli_select_db($con, $dbname);

	$sql = "CREATE TABLE IF NOT EXISTS products(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		title VARCHAR(255) NOT NULL,
		price INT NOT NULL,
		description TEXT NOT NULL,
		img VARCHAR(255) NOT NULL,
		category VARCHAR(255) NOT NULL,
		sale INT DEFAULT NULL,
		new INT DEFAULT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
	mysqli_query($con, $sql);

	$sql = "INSERT INTO products (title, price, description, img, category, sale, new) VALUES
		('Apple iPhone X 256 ГБ «серый космос»', 75990, 'Совершенно новый дисплей Super Retina с диагональю 5,8 дюйма, который удобно\r\nлежит в руке и потрясающие выглядит, — это и есть iPhone X.', 'iphone.jpg', 'Телефоны', 1, NULL),
		('Apple iMac 27\" Retina 5K Core i5 3.8 ГГц, 8 ГБ, 2 ТБ Fusion Drive, Radeon Pro 580 8 ГБ', 164990, 'Настольный компьютер, который погружает вас в контент. Буквально. Эта идея лежит\r\nв основе современного iMac — и сегодня она актуальна как никогда. Совершенно\r\nновые процессоры, инновационные графические технологии, передовые накопители\r\nи разъёмы с впечатляющей пропускной способностью — всё это новый iMac. А его\r\nдисплей Retina способен оживить любую картинку, ведь по яркости и качеству\r\nцветопередачи ему нет равных среди iMac. Работать на iMac теперь ещё интереснее\r\nи увлекательнее.', 'imac.jpg', 'Компьютеры', NULL, 1),
		('Apple MacBook Air 13\" Dual-Core i5 1,6 ГГц, 8 ГБ, 256 ГБ SSD, «серый космос»', 120990, 'Новый MacBook Air — ещё более тонкий и лёгкий, оснащён дисплеем Retina, клавиатурой нового поколения, трекпадом Force Touch и технологией Touch ID, которая защищает ваши данные и открывает доступ к ним только вам. Это самый экологичный Mac. Для его корпуса используется только переработанный алюминий.1 И это невероятно удобный MacBook Air, который справится с любыми задачами. ', 'macbook.jpg', 'Ноутбуки', NULL, 1),
		('Apple iPad (2018) Wi-Fi + Cellular 32 ГБ, «серый космос»', 34990, 'Давайте представим, что компьютер изобрели сегодня. Какой он? Очень мощный, чтобы справляться с любыми задачами. Невероятно портативный, чтобы носить его с собой повсюду. А ещё он настолько удобный, что им можно управлять, просто прикасаясь к экрану. Или с помощью клавиатуры. И даже карандашом.1  Другими словами, это не совсем компьютер. Это новый iPad.', 'ipad.jpg', 'Планшеты', NULL, 1),
		('Apple Mac mini Core i5 3,0 ГГц, 8 ГБ, SSD 256 ГБ, Intel UHD Graphics 630', 29000, 'Mac mini — мощный настольный компьютер, контроллер для домашней автоматики, основа масштабных рендер?ферм. И многое, очень многое другое. Теперь Mac mini оснащён 4?ядерным или 6?ядерным процессором Intel восьмого поколения и графикой Intel UHD Graphics 630. А значит, у него ещё больше вычислительной мощности для выполнения ресурсоёмких задач. Что бы вы ни делали — от обработки звука с концерта до тестирования своего приложения для iOS, — Mac mini ускорит воплощение любой идеи.', 'mac-mini.jpg', 'Компьютеры', 1, NULL)";
	mysqli_query($con, $sql);

	$sql = "CREATE TABLE IF NOT EXISTS users(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		email VARCHAR(100) NOT NULL UNIQUE,
		password VARCHAR(100) NOT NULL,
		rights VARCHAR(10) NOT NULL,
		name VARHAR(100) NOT NULL,
		birthday VARCHAR(100) NOT NULL,
		sex VARCHAR(20) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";
	mysqli_query($con, $sql);
	
	$sql = "INSERT INTO users (email, password, rights, name, birthday, sex)
	VALUES ('Nosov_yura@inbox.ru', password_hash('Ro3s95mA', PASSWORD_DEFAULT), 'admin', 'Юрий', '1995-12-22', 'мужской'),
		   ('some_email@inbox.ru', password_hash('Jai7uKie', PASSWORD_DEFAULT), 'user', 'Пользователь', '2020-04-28', 'женский')";
	mysqli_query($con, $sql);


	mysqli_close($con);
?>
