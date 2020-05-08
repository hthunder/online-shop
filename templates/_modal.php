<!-- The Modal -->
<div class="modal" id="myModal">
	<!-- Modal content -->
	<div class="modal__content">
		<span class="close">&times;</span>
		<div class="modal__inner">
			<div class="modal__form">
				<h2 class="modal__title">У меня уже есть аккаунт</h2>
				<form class="modal__login-form" action="">
					<div class="modal__login-wrapper">
						<label class="modal__label">
							<input class="input modal__form-item" placeholder="Ваш email" name="email" type="email"></label><label class="modal__label">
							<input class="input modal__form-item" placeholder="Пароль" name="pass1" type="password">
						</label>
					</div>
					<button class="button button_accent button_fs_14 modal__button" id="login-submit">Войти</button>
				</form>
			</div>
			<div class="modal__form">
				<h2 class="modal__title">Регистрация</h2>
				<form class="modal__registration-form">
					<label class="modal__label">
						<input class="input modal__form-item" placeholder="Ваше имя" name="name" type="text">
					</label>
					<label class="modal__label">
						<input class="input modal__form-item" placeholder="Введите пароль" name="pass1" type="password">
					</label>
					<label class="modal__label">
						<input class="input modal__form-item" placeholder="Повторите пароль" name="pass2" type="password">
					</label>
					<label class="modal__label">
						<input class="input modal__form-item" placeholder="Ваш email" name="email" type="email">
					</label>
					<div class="modal__checkbox">
						<input class="modal__checkbox-input" type="checkbox">
						<p class="modal__checkbox-text">Подтверждаю свое согласие с </p><a class="link modal__checkbox-link" href="#">сервисными условиями</a>	
					</div>
					<button class="button button_accent button_fs_14 modal__button" id="signup-submit">Зарегистрироваться</button>
				</form>
			</div>
		</div>
	</div>
</div>