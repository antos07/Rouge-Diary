<?php include 'header.php'; ?>
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
<?php include 'footer.php';?>