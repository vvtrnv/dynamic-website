<?php
include "../../path.php";
include "../../app/controllers/posts.php";
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
        <a href="<?php echo BASE_URL . 'admin/posts/create.php'?>" class="col-2 btn btn-success">Добавить</a>
        <span class="col-1"></span>
        <a href="<?php echo BASE_URL . 'admin/posts/index.php'?>" class="col-2 btn btn-warning">Управление</a>
      </div>

      <div class="row title-table">
        <h2>Добавление записи</h2>
      </div>
      <div class="row add-post">
        <form action="create.php" method="post">
          <div class="col mb-4">
            <input value="<?=$title?>" name="title" type="text" class="form-control" placeholder="title" aria-label="Название статьи">
          </div>
          <div class="col">
            <label for="editor" class="form-label">Текст статьи</label>
            <textarea name="content" class="form-control" id="editor" rows="10"><?=$content?></textarea>
          </div>
          <div class="input-group col mb-4 mt-4">
            <input name="img" type="file" class="form-control" id="upload">
            <label class="input-group-text" for="upload">Upload</label>
          </div>
          <select name="id_category" class="form-select mb-4" aria-label="select">
            <option value="" selected>Выберете категорию</option>
			  <?php foreach (getAllCategories() as $key => $category): ?>
                <option value="<?=$category['id'];?>"><?=$category['name'];?></option>
			  <?php endforeach; ?>
          </select>
          <div class="mb-3 col-12 col-md-12 err">
            <p><?=$msg;?></p>
          </div>
          <div class="col-12 mb-4">
            <button name="add_post"class="btn btn-primary" type="submit">Сохранить запись</button>
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

<!-- CKEDITOR. Редактор к текстовому полю админки-->
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script src="../../assets/js/script.js"></script>
</body>
</html>