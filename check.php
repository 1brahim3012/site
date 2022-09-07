<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$text = filter_var(trim($_POST['text']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);

	if(mb_strlen($login) < 2 || mb_strlen($login) > 90) {
		echo "log";
		exit();
	}else if(mb_strlen($email) < 1 || mb_strlen($email) > 50) {
		echo "email";
		exit();
	}
	else if(mb_strlen($text) < 2 || mb_strlen($text) > 20) {
		echo "pass";
		exit();
	}
	else if(mb_strlen($name) < 2 || mb_strlen($name) > 20) {
		echo "pass";
		exit();
	}

	$mysql = new mysqli('localhost', 'root', 'root', 'register-bg');
	$mysql->query("INSERT INTO `users` (`login`, `email`, `text`, `name`) VALUES('$login', '$email', '$text', '$name')");

	$mysql->close();

	header('Location: /');

?>