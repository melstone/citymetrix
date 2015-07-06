<?php require_once('http://' . $_SERVER['HTTP_HOST'] . '/includes/header.php'); ?>

		<div class="page container">
			<div class="page-title">
				<h1>Контакты</h1>
				<p>Для связи с нами заполните контактную форму ниже</p>
			</div>

			<div class="page-inner">
				<div class="content">
					<div class="b-contacts-form">
						<div class="b-title">
							<h3>Контактная форма</h3>
						</div>
						<div class="b-body">
							<form action="" class="b-contacts-form__form">
								<div class="field">
									<input type="text" class="field-element name" placeholder="Ваше имя">
								</div>
								<div class="field">
									<input type="text" class="field-element email" placeholder="Ваш E-mail">
								</div>
								<div class="field">
									<input type="text" class="field-element theme" placeholder="Тема сообщения">
								</div>
								<div class="field">
									<textarea class="field-element message" placeholder="Ваше сообщение"></textarea>
								</div>
								<div class="field">
									<input type="submit" class="button button-icon-send" value="Отправить">
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- / .content -->

				<div class="aside">
					<div class="b-search">
						<div class="b-title">
							<h3>Поиск по сайту</h3>
						</div>
						<div class="b-body">
							<form action="" class="b-search__form">
								<input type="text" placeholder="Поиск">
								<input type="submit" value="">
							</form>
						</div>
					</div>

					<div class="b-other-ratings">
						<div class="b-title">
							<h3>Другие рейтинги</h3>
						</div>
						<div class="b-body">
							<div class="b-other-ratings__list">
								<div class="item">
									<div class="meta">
										<a class="category house" href="#">Дом</a>
										<div class="date">8.06.2015</div>
									</div>
									<div class="title">
										<a href="#">Зелёный двор</a>
									</div>
								</div>
								<div class="item">
									<div class="meta">
										<a class="category leisure" href="#">Досуг</a>
										<div class="date">19.06.2015</div>
									</div>
									<div class="title">
										<a href="#">Зоны отдыха у воды</a>
									</div>
								</div>
								<div class="item">
									<div class="meta">
										<a class="category leisure" href="#">Досуг</a>
										<div class="date">18.06.2015</div>
									</div>
									<div class="title">
										<a href="#">Рейтинг парков Москвы</a>
									</div>
								</div>
								<div class="item">
									<div class="meta">
										<a class="category auto" href="#">Транспорт</a>
										<div class="date">18.06.2015</div>
									</div>
									<div class="title">
										<a href="#">Эпицентры транспортных проблем.</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- / .b-other-ratings -->
				</div>
			</div>
			<!-- / .page-inner -->
		</div>
		<!-- / .page -->
		
<?php require_once('http://' . $_SERVER['HTTP_HOST'] . '/includes/footer.php'); ?>