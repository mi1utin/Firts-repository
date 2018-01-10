<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Новый тестовый сайт,новая верстка">
	<meta name="Author" content="Andrew Milutin">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Новый сайт</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="styles/normalise.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/new.scss">
</head>
<body>
<div id="wrapper">
	<header>
		<div id="logo">
			<a href="#"><b>New Site</b></a>
		</div>
		<ul>
			<li><a href="#">Меню</a></li>
			<li><a href="#">Меню</a></li>
			<li><a href="#">Меню</a></li>
	    </ul>
	</header>
	<div id="active">
		Здесь анимация
	</div>
	<div id="text">
		<p>Лучший учебник-самоучитель для подготовки к ЕГЭ по Обществознанию.Здесь можно самостоятельно и совершенно бесплатно ознакомиться с темами,а также детально изучить их.</p>
		<p>Учебник разбит на разделы (темы) , которые встретятся в экзамене.Все данные представлены в прекрасном виде</p>
		<p>Также есть возможность задать вопросы пользователям сайта,но для этого нужно пройти Авторизацию</p>
		<p>Благодарим за внимание!</p>
	</div>
	<div id="authorisation">
		<form method="POST" action="">
			<input type="text" name="login" maxlength="25" placeholder="Введите Логин">
			<input type="password" name="password" maxlength="25" placeholder="Введите Пароль">
			<button type="submit" id="a"><b>Войти</b></button>
		</form>
	</div>
	<footer>
		SiteNEW | Все права защищены 2017
	</footer>
</div>
</body>
</html>