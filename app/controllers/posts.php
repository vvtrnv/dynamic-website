<?php

include SITE_ROOT . '/app/database/db.php"';

$msg = '';

$title = '';
$content = '';

function checkCategory($title, $content, $category) {
	global $msg;

	if ($title === '') {
		$msg = "Поле названия статьи не должно быть пустым!";
		return false;
	}
	elseif (mb_strlen($title, 'UTF-8') < 3) {
		$msg = "Поле названия статьи должно содержать более 3 символов!";
		return false;
	}
	elseif ($content === '') {
		$msg = "Текст статьи не должен быть пустым!";
		return false;
	}
	elseif ($category === '') {
		$msg = "Выберете категорию!";
		return false;
	}

	return true;
}

// Создание записи
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_post'])) {
	$title = trim($_POST['title']);
	$content = trim($_POST['content']);
	$img = trim($_POST['img']);
	$id_category = trim($_POST['id_category']);
	$id_user = $_SESSION['id'];
	$status = 1;

	if(checkCategory($title, $content, $id_category)) {
		$post = [
			'id_user' => $id_user,
			'id_category' => $id_category,
			'title' => $title,
			'img' => $img,
			'content' => $content,
			'status' => $status
		];

		$id = insert('posts', $post);
		header('location: ' . BASE_URL . 'admin/posts/index.php');
	}
}


function getAllCategories() {
	return selectAll('categories');
}

function deleteCategory($id) {
	delete('categories', $id);
}

// Редактирование категории

//if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
//	$id = $_GET['id'];
//
//	$category = selectOne('categories', ['id' => $id]);
//	$id = $category['id'];
//	$name = $category['name'];
//	$description = $category['description'];
//}
//
//if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category-edit'])) {
//	$id = trim($_POST['id']);
//	$name = trim($_POST['name']);
//	$description = trim($_POST['description']);
//
//	if ($name === '') {
//		$msg = "Поле названия категории не должно быть пустым";
//	}
//	else {
//		$category = [
//			'name' => $name,
//			'description' => $description
//		];
//
//		update('categories', $category, $id);
//		header('location: ' . BASE_URL . 'admin/categories/index.php');
//	}
//}
//
//
//// Удаление категории
//
//if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del_id'])) {
//	$id = $_GET['del_id'];
//	$category = selectOne('categories', ['id' => $id]);
//	$name = $category['name'];
//
//	delete('categories', $id);
//	$msg = "Категория с именем $name была удалена!";
//	header('location: ' . BASE_URL . 'admin/categories/index.php');
//}