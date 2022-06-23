<?php
include("path.php");
include "app/database/db.php";
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

<!--Блок main START-->
<div class="container">
  <div class="content row">
    <!--Main content-->
    <div class="main-content col-md-9 col-12">
      <h2>Заголовок статьи для примера как он будет в несколько строк абабабаббабаба аббааба бабабаба бабабба</h2>

      <div class="single_post row">
        <div class="img col-12">
          <img src="assets/images/image_01.jpg" alt="..." class="img-thumbnail">
        </div>
        <div class="single_post_text col-12">
          <div class="info">
            <i class="far fa-user"> Имя Автора</i>
            <i class="far fa-calendar"> Mar 11, 2019</i>
          </div>
          <p><a href="#">Lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nihil, quasi! Animi delectus dolorum eum nemo nisi nulla omnis quis rerum.
            Aut iure magnam officiis repellendus reprehenderit? Commodi, culpa quisquam?</p>

        </div>
      </div>
    </div>

    <!--Main sidebar content-->
    <div class="sidebar col-md-3 col-12">
      <div class="section search">
        <h3>Поиск</h3>
        <form action="/" method="post">
          <input type="text" name="search-item" class="text-input" placeholder="Введите искомое слово">
        </form>
      </div>


      <div class="section topics">
        <h3>Категории</h3>
        <ul>
          <li><a href="#">Программирование</a></li>
          <li><a href="#">Дизайн</a></li>
          <li><a href="#">Мотивация</a></li>
          <li><a href="#">Визуализация</a></li>
          <li><a href="#">Кейсы</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>
<!--Блок main END-->

<?php
include("app/include/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>