<?php
	setcookie('user', $user['name'], time() -3600, "/");
	header('Location: /jeke-kabinet.php');
?>