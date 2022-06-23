<?php
include "app/database/db.php";

$msg = '';

// Проверка данных с формы регистрации
function checkDataFromReg($login, $email, $pass, $repass) {
	global $msg;

	if($login === '' || $email === '' || $pass === '') {
		$msg = "Не все поля заполнены!";
		return false;
	}
	elseif (mb_strlen($login, 'UTF-8') < 2){
		$msg = "Логин должен быть не короче 2-ух символов и не более 30-ти";
		return false;
	}
	elseif($pass !== $repass) {
		$msg = "Пароли должны совпадать!";
		return false;
	}
	else {
		$existence = selectOne('users', ['email' => $email]);
		if(!empty($existence) && $existence['email'] === $email) {
			$msg = "Пользователь с такой почтой уже зарегистрирован!";
			return false;
		}
	}

	return true;
}

// Проверка данных с формы авторизации
function checkDataFromAuth($email, $pass) {
	global $msg;

	if($email === '' || $pass === '') {
		$msg = "Не все поля заполнены!";
		return null;
	}
	else {
		$existence = selectOne('users', ['email' => $email]);
		if(!empty($existence) && password_verify($pass, $existence['password'])) {
			return $existence;
		}
		else {
			$msg = "Ошибка авторизации!";
			return null;
		}
	}
}

// Настройка сессии и перенаправление на другую страницу
function installSession($user) {
	$_SESSION['id'] = $user['id'];
	$_SESSION['login'] = $user['username'];
	$_SESSION['admin'] = $user['admin'];

	if($_SESSION['admin']) {
		header('location: ' . BASE_URL . "admin/posts/index.php");
	}
	else {
		header('location: ' . BASE_URL);
	}
}

// Регистрация
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['button-reg'])) {
	$admin = 0;
	$login = trim($_POST['login']);
	$email = trim($_POST['email']);
	$pass = trim($_POST['pass']);
	$repass = trim($_POST['repass']);

	if(checkDataFromReg($login, $email, $pass, $repass)) {
		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$post = [
			'admin' => $admin,
			'username' => $login,
			'email' => $email,
			'password' => $pass
		];

		$id = insert('users', $post);

		$user = selectOne('users', ['id' => $id]);
		installSession($user);
	}

}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['button-auth'])) {
	$email = trim($_POST['email']);
	$pass = trim($_POST['pass']);

	$user = checkDataFromAuth($email, $pass);
	if($user != null) {
		installSession($user);
	}
}
else {
	$login = '';
	$email = '';
}



