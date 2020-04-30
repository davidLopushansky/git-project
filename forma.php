<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Обратная связь</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<?php require "blocks/header.php"?>
	<div class="container">
		<h1>Обратная связь</h1>
		<form>
			<input type="email" id="email" name="email" placeholder="Email" class="form-control"><br>
			<input type="text" id="name" name="name" placeholder="Введите имя" class="form-control"><br>
			<input type="phone" id="phone" name="phone" placeholder="Телефон" class="form-control"><br>
			<textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
			<button type="button" id="sendMail" class="btn btn-success">Отправить</button>
		</form>
		<div id="errorMess"></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/formMail.js"></script>
	<?php require "blocks/footer.php"?>
</body>
</html>
