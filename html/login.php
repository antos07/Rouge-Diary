<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/login.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript" src="../js/login.js"></script>
		<title>Login</title>
	</head>
	<body>
		<header>
			<span id="title">Электронный дневник</span>
			<a id="profile" href="login.html">
			<img src="../images/profile_image.png">
			<span>Вход не выполнен<span>
			</a>
		</header>
		<hr>
		<content>
			<div id="LoginContainer">
				<form id="LoginForm" method="POST" action="">
					<legend>Вход не выполнен</legend>
					<div id="LoginResult" style="display: none;"></div>
					<div>
						<label for="login">Логин</label>
						<input type="text" name="login" id="login" value="" required>
					</div>
					<div>
						<label for="pass">Пароль</label>
						<input type="password" name = "pass" id="pass" value="" required>
					</div>
					<input type="submit" value="Войти">
				</form>
			</div>
		</content>
		<hr>
		<footer>
			Все права защищены
		</footer>
	</body>
</html>
