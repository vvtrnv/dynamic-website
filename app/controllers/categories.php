<?php

include SITE_ROOT . '/app/database/db.php';

$msg = '';

function checkCategory($name) {
	global $msg;

	if ($name === '') {
		$msg = "Поле названия категории не должно быть пустым";
		return false;
	}
	else {
		$existence = selectOne('categories', ['name' => $name]);
		if(!empty($existence) && $existence['name'] === $name) {
			$msg = "Категория с таким именем уже существует!";
			return false;
		}
	}
	return true;
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category-create'])) {
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);

	if(checkCategory($name)) {
		$category = [
			'name' => $name,
			'description' => $description
		];

		$id = insert('categories', $category);
		header('location: ' . BASE_URL . 'admin/categories/index.php');
	}
}
else {
	$name = '';
	$description = '';
}

function getAllCategories() {
	return selectAll('categories');
}

function deleteCategory($id) {
	delete('categories', $id);
}

// Редактирование категории

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
	$id = $_GET['id'];

	$category = selectOne('categories', ['id' => $id]);
	$id = $category['id'];
	$name = $category['name'];
	$description = $category['description'];
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category-edit'])) {
	$id = trim($_POST['id']);
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);

	if ($name === '') {
		$msg = "Поле названия категории не должно быть пустым";
	}
	else {
		$category = [
			'name' => $name,
			'description' => $description
		];

		update('categories', $category, $id);
		header('location: ' . BASE_URL . 'admin/categories/index.php');
	}
}


// Удаление категории

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del_id'])) {
	$id = $_GET['del_id'];
	$category = selectOne('categories', ['id' => $id]);
	$name = $category['name'];

	delete('categories', $id);
	$msg = "Категория с именем $name была удалена!";
	header('location: ' . BASE_URL . 'admin/categories/index.php');
}