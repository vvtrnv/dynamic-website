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
				<h2>Создание пользователя</h2>
			</div>
			<div class="row add-post">
				<form action="create.php" method="post">
					<div class="col-8">
						<label for="formGroupExampleInput" class="form-label">Логин</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="login" value="">
					</div>
					<div class="w-100"></div>
					<div class="col-8">
						<label for="exampleInputEmail1" class="form-label">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="">
					</div>
					<div class="w-100"></div>
					<div class="col-8">
						<label for="exampleInputPassword1" class="form-label">Пароль</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="pass">
					</div>
					<div class="w-100"></div>
					<div class="col-8">
						<label for="exampleInputPassword2" class="form-label">Повтор пароля</label>
						<input type="password" class="form-control" id="exampleInputPassword2" name="repass">
					</div>
					<select class="form-select" aria-label="Default select example">
						<option selected>Open this select menu</option>
						<option value="1">user</option>
						<option value="2">admin</option>
					</select>
					<div class="col-12">
						<button class="btn btn-primary" type="submit">Создать</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include("../../app/include/footer.php");
?>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>