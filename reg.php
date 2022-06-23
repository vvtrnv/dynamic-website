<?php
  include "path.php";
  include "app/controllers/users.php";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <script src="https://kit.fontawesome.com/b6912d0d45.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
include("app/include/header.php");
?>

<!-- FORM -->
<div class="container reg_form">
  <form class="row justify-content-center" method="post" action="reg.php">
    <h2 class="col-12">Форма регистрации</h2>
    <div class="mb-3 col-12 col-md-4">
      <label for="formGroupExampleInput" class="form-label">Логин</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="login" value="<?=$login?>">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$email?>">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword2" class="form-label">Повтор пароля</label>
      <input type="password" class="form-control" id="exampleInputPassword2" name="repass">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4 err">
      <p><?=$msg?></p>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
      <a href="auth.php">Авторизация</a>
    </div>
  </form>
</div>
<!-- FORM END -->

<?php
include("app/include/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>