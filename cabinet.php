<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Личный кабинет - CityMetrix</title>

	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="format-detection" content="telephone=no">

	<link rel="shortcut icon" href="/favicon.ico">

	<link rel="stylesheet" href="/css/main.css">

	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/main.js"></script>

	<!--[if lt IE 9]>
		<script src="/js/css3-mediaqueries.js"></script>
		<script src="/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="canvas">
		<div class="header">
			<div class="container">
				<a href="/" class="logo"></a>

				<div class="main-navigation">
					<ul>
						<li class="news"><a href="#">Новости</a></li>
						<li class="culture"><a href="#">Культура</a></li>
						<li class="sport"><a href="#">Спорт</a></li>
						<li class="business"><a href="#">Бизнес</a></li>
						<li class="health"><a href="#">Здоровье</a></li>
						<li class="work"><a href="#">Работа</a></li>
						<li class="about"><a href="/about.php">О проекте</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- / .header -->
		
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
		

	<div class="footer">
		<div class="container">
			<a href="/" class="footer-logo"></a>
			<div class="footer-copyright">
				© Citymetrix
			</div>
			<div class="footer-navigation">
				<ul>
					<li><a href="/contacts.php">Контакты</a></li>
					<li><a href="/about.php">О проекте</a></li>
					<li><a class="link-underline" href="/lp">Мобильное приложение</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- / .footer -->
	
</body>
</html>