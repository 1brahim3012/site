<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$text = filter_var(trim($_POST['text']),
	FILTER_SANITIZE_STRING);

	$mysql = new mysqli('localhost', 'root', 'root', 'register-bg');
	
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `text` = '$text'");
	$user = $result->fetch_assoc();
	if(count($user) == 0) {
		echo "Бұндай аккаунт табылмады!";
		exit();
	}

	setcookie('user', $user['name'], time() +3600, "/");

	$mysql->close();

	header('Location: /jeke-kabinet.php');
?>