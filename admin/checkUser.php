<?php

if(empty($_SESSION)) {
	echo '<h4 class="container">Ошибка авторизации. Войдите в систему</h4>';
	exit();
}
if($_SESSION['admin'] != 1) {
	echo '<h4 class="container">Нет доступа</h4>';
	exit();
}