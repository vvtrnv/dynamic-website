<?php

include "../../path.php";
include "../../app/controllers/categories.php";
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
				<a href="<?php echo BASE_URL . 'admin/categories/create.php';?>" class="col-2 btn btn-success">Добавить</a>
				<span class="col-1"></span>
				<a href="<?php echo BASE_URL . 'admin/categories/index.php';?>" class="col-2 btn btn-warning">Управление</a>
			</div>

			<div class="row title-table">
				<h2>Редактирование категории</h2>
			</div>
			<div class="row add-post">
				<form action="edit.php" method="post">
                  <input value="<?=$id;?>" name="id" type="hidden" >
					<div class="col">
						<input value="<?=$name;?>" name="name" type="text" class="form-control" placeholder="Имя категории" aria-label="Имя категории">
					</div>
					<div class="col">
						<label for="content" class="form-label">Описание категории</label>
						<textarea  class="form-control" id="content" rows="10" name="description"><?=$description?></textarea>
					</div>
					<div class="mb-3 col-12 col-md-12 err">
						<p><?=$msg;?></p>
					</div>
					<div class="col-12">
						<button class="btn btn-primary" type="submit" name="category-edit">Сохранить</button>
					</div>
				</form>
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