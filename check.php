<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
		echo "Недопустимая длина логина";
		exit();
	} else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
		echo "Недопустимая длина имя";
		exit();
	} else if(mb_strlen($password) < 2 || mb_strlen($password) > 6) {
		echo "Недопустимая длина пороля (от 2 до 6 символов)";
		exit();
	}

	$password = md5($password."qwerty123456");

	$mysql = new mysqli('localhost', 'root', '', 'register-bd');
	$mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");

	$mysql->close();

	header('Location: /form.php'); 
?>
