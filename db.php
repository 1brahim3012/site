<?php

require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=reg-db',
		'root', 'root' );

header('Location: /');

?>