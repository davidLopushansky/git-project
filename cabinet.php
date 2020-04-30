<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewpor" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php require "blocks/header.php"?>
	<div class="container mt-4">
		<?php 
		if ($_COOKIE['user'] == ''):
		?>
		<div class="row">
			<div class="col">
				<h1>Форма регистрации</h1>
		<form action="validation-form/check.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пороль"><br>
			<button class="btn btn-success" type="submit">Зарегистрировать</button>
		</form>
			</div>
			<div class="col">
				<h1>Форма авторизации</h1>
		<form action="validation-form/authenticate.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Введите пороль"><br>
			<button class="btn btn-success" type="submit">Авторизоваться</button>
		</form>
			</div>
			<?php else: ?>
				<p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="validation-form/exit.php">здесь</a>.</p>
			<?php endif; ?>
		</div>
	</div>
	<?php require "blocks/footer.php"?>
</body>
</html>