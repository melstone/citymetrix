<?php require_once('http://' . $_SERVER['HTTP_HOST'] . '/includes/header.php'); ?>
		
		<div class="b-user-auth">
			<div class="container">
				<div class="social-icons-list">
					<div class="icon facebook"></div>
					<div class="icon vk"></div>
					<div class="icon twitter"></div>
					<div class="icon ok"></div>
					<div class="icon email"></div>
				</div>
				<div class="button">Выйти</div>
			</div>
		</div>
		<!-- / .b-user-auth -->

		<div class="page container">
			<div class="page-title">
				<h1>Личный кабинет</h1>
			</div>
			
			<div class="user-info">
				<form action="">
					<div class="field field-upload field-user-photo align-center">
						<div class="title">
							Фото *
						</div>
						<div class="button block">
						</div>
						<input type="file" class="field-element">
						<div class="clear">
						</div>
					</div>
					<div class="field">
						<div class="title">
							E-mail *
						</div>
						<input type="email" class="field-element" value="sample-email@mail.com">
					</div>
					<div class="field">
						<div class="title">
							Имя *
						</div>
						<input type="text" class="field-element" value="Андрей">
					</div>
					<div class="field">
						<div class="title">
							Фамилия *
						</div>
						<input type="text" class="field-element" value="Большаков">
					</div>
					<div class="field">
						<div class="title">
							Телефон
						</div>
						<input type="tel" class="field-element" value="89121234567">
					</div>

					<br><br>

					<div class="field">
						<div class="title">
							Старый пароль
						</div>
						<input type="password" class="field-element" value="89121234567">
					</div>
					<div class="field">
						<div class="title">
							Новый пароль
						</div>
						<input type="password" class="field-element" value="89121234567">
					</div>

					<br>

					<div class="field align-center">
						<input class="button" type="submit" value="Сохранить">
					</div>
				</form>
			</div>
		</div>
		<!-- / .page -->
	</div>

<?php require_once('http://' . $_SERVER['HTTP_HOST'] . '/includes/footer.php'); ?>