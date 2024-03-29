<!DOCTYPE html>
<html lang="en">
	<?php include("templates/_head.php"); ?>
	<body>
		<div class="content">
			<?php include("templates/_header.php"); ?>
			<section class="cabinet">
				<div class="container">
					<!-- Удалить инлайновый стиль!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
					<div class="cabinet__logout" style="flex-basis: 100%"> 
						<h1 class="title-1">Кабинет пользователя</h1>
						<button class="button button_accent" type="submit">Выйти</button>
					</div>
					<form class="cabinet__form">
						<fieldset class="cabinet__fieldset">
							<label class="cabinet__label cabinet__input">Имя пользователя<input class="input cabinet__input" placeholder="Your name" name="name" type="text" ></label>
						</fieldset>
						<fieldset class="cabinet__fieldset">
							<legend class="cabinet__legend">Изменение пароля</legend>
							<label class="cabinet__label">Старый пароль<input class="input cabinet__input" name="old-pass" type="password"></label>
							<label class="cabinet__label">Введите новый пароль<input class="input cabinet__input" name="new-pass1" type="password"></label>
							<label class="cabinet__label">Повторите новый пароль<input class="input cabinet__input" name="new-pass2" type="password"></label>
						</fieldset>
						<fieldset class="cabinet__fieldset">
							<legend class="cabinet__legend">О себе</legend>
							<label class="cabinet__label">Дата рождения<input class="input cabinet__input" placeholder="Your birthday" name="birthday" type="date"></label>
							<p class="cabinet__text-sex">Ваш пол:</p>
							<label class="cabinet__label cabinet__label_block"><input class="cabinet__input-sex" type="radio" name="sex"value="male" checked>Мужской</label>
							<label class="cabinet__label cabinet__label_block"><input class="cabinet__input-sex" type="radio" name="sex"value="female">Женский</label>
							<label class="cabinet__label cabinet__label_block"><input class="cabinet__input-sex" type="radio" name="sex"value="other">Прочее</label>
						</fieldset>
						<button class="button button_accent" id="user-submit" >Обновить</button>
					</form>
				</div>
			</section>
		</div>
		<?php include("templates/_footer.php"); ?>
	</body>
</html>