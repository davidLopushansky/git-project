<?php
	$email = $_POST['email'];
	
	$message = $_POST['message'];

	$error = '';
	if(trim($email) == '')
		$error = 'Введите ваш email';
	else if(trim($message) == '')
		$error = 'Введите само сообщение';
	else if(strlen($message) < 10)
		$error = 'В сообщение должно быть более 10 символов';
	if($error != '') {
		echo $error;
		exit;
	}

	$resMessage='отправитель - '.$email.'<br>';
	$resMessage .='__________________________________________________________<br>';
	$resMessage .='Текст сообщения <br>';
	$resMessage .=$message;

	$subject = "=?uth-8?B?".base64_encode("Сообщение из формы обратной связи")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=uth-8\r\n";

	mail('imediasun05@gmail.com', $subject, $resMessage, $headers);

	header('Location: /about.php');
?>