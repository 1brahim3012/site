<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="jeke.css">
</head>
<body>
	<div class="bordery"></div>
	<h1>Jeke kabinet</h1>
	<div class="bordery"></div>
	<nav class="menu">
		<a href="index.php" class="first">BASTY BET</a>
		<a href="jetistikter.html" class="two">JETISTIKTER</a>
		<a href="html.html" class="three">HTML</a>
		<a href="bailanys.html" class="four">BAILANYS</a>
		<a href="Jeke-kabinet.php" class="five">JEKE KABINET</a>
		<div class="animation start-home"></div>
	</nav>
	<?php
		if($_COOKIE['user'] == ''):
	?>
	<div class="jeke">
		<form action="auth.php" method="POST">
			<div class="group">
				<label for="">LOGIN</label>
				<input type="login" name="login" id="login">
			</div>
			<div class="group">
				<label for="">QUPIASOZ</label>
				<input type="text" name="text" id="text">
			</div>
			<div class="group">
				<center><button type="sumbit">qiru</button></center>
			</div>
		</form>
		<div class="form2">
			<div class="group2">
				<a href="" class="psdp">Qupiasozdi umyttym</a>
				<a href="reg.php" class="reg">Tirkelu</a>
			</div>
	<?php else: ?>
		<h1>НАСТРОЙКИ</h1>
	<div class="ava-name">
		<div class="ava">
			<p class="name">Сәлем, <?=$_COOKIE['user']?></p>
		</div>
	</div>
		<div class="st">
			<div class="st-bt">
				<ul>
				<li style="--clr:#87CEEB"><a href="login.php" class="st" data-text="&nbsp;Логин⠀өзгерту">&nbsp;Логин⠀өзгерту&nbsp;</a></li><br>
				<li style="--clr:#87CEEB"><a href="name.php" class="st" data-text="&nbsp;Есімді⠀өзгерту">&nbsp;Есімді⠀өзгерту&nbsp;</a></li><br>
				<li style="--clr:#87CEEB"><a href="email.php" class="st" data-text="&nbsp;Почтаны⠀өзгерту">&nbsp;Почтаны⠀өзгерту&nbsp;</a></li><br>
				<li style="--clr:#87CEEB"><a href="pass.php" class="st" data-text="&nbsp;Құпиясөзді⠀өзгерту">&nbsp;Құпиясөзді⠀өзгерту&nbsp;</a></li><br>
				<li style="--clr:#87CEEB"><a class="st" href="exit.php" data-text="&nbsp;Аккаунттан⠀шығу">&nbsp;Аккаунттан⠀шығу&nbsp;</a></li>
			</div>
			
	</div>

	<?php endif; ?>
</body>
</html>