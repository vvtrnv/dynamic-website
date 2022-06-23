<?php
session_start();
include "../../path.php";

?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="../../assets/css/admin.css">

	<!-- Font awesome -->
	<script src="https://kit.fontawesome.com/b6912d0d45.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
include "../../app/include/header-admin.php";
include "../checkUser.php";
?>

<div class="container">
	<div class="row">
        <?php
        include "../../app/include/menu-admin.php";
        ?>
		<div class="posts col-9">
			<div class="button row">
				<a href="<?php echo BASE_URL . 'admin/users/create.php'?>" class="col-2 btn btn-success">Добавить</a>
				<span class="col-1"></span>
				<a href="<?php echo BASE_URL . 'admin/users/index.php'?>" class="col-2 btn btn-warning">Управление</a>
			</div>
			<div class="row title-table">
				<h2>Управление пользователями</h2>
				<div class="col-1">ID</div>
				<div class="col-5">Логин</div>
				<div class="col-2">Роль</div>
				<div class="col-4">Управление</div>
			</div>
			<div class="row post">
				<div class="id col-1">1</div>
				<div class="title col-5">Andrew1092</div>
				<div class="title col-2">admin</div>
				<div class="red col-2"><a href="">Edit</a></div>
				<div class="del col-2"><a href="">Delete</a></div>
			</div>
			<div class="row post">
				<div class="id col-1">2</div>
				<div class="title col-5">kravc</div>
				<div class="title col-2">user</div>
				<div class="red col-2"><a href="">Edit</a></div>
				<div class="del col-2"><a href="">Delete</a></div>
			</div>
			<div class="row post">
				<div class="id col-1">3</div>
				<div class="title col-5">user020</div>
				<div class="title col-2">user</div>
				<div class="red col-2"><a href="">Edit</a></div>
				<div class="del col-2"><a href="">Delete</a></div>
			</div>
		</div>
	</div>
</div>
</div>

<?php
include("../../app/include/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>