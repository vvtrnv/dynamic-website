<?php
include "path.php";
include "app/database/db.php";
?>
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

<!--Блок карусели START-->
<div class="container">
  <div class="row">
    <h2 class="slider-title">Топ публикации</h2>
  </div>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/image_01.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="#">First slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/images/image_02.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="#">Third slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/images/image_03.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="#">Second slide label</a></h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!--Блок карусели END-->


<!--Блок main START-->
<div class="container">
  <div class="content row">
    <!--Main content-->
    <div class="main-content col-md-9 col-12">
      <h2>Последние публикации</h2>
      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/images/image_01_small.jpg" alt="..." class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Статья на тему динамического сайта...</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid aperiam asperiores cumque distinctio doloremque eveniet excepturi fugit impedit laborum nemo nihil non odio quia recusandae sed sequi, soluta temporibus veritatis.
          </p>
        </div>
      </div>

      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/images/image_01_small.jpg" alt="..." class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Статья на тему динамического сайта...</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid aperiam asperiores cumque distinctio doloremque eveniet excepturi fugit impedit laborum nemo nihil non odio quia recusandae sed sequi, soluta temporibus veritatis.
          </p>
        </div>
      </div>

      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/images/image_01_small.jpg" alt="..." class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Статья на тему динамического сайта...</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid aperiam asperiores cumque distinctio doloremque eveniet excepturi fugit impedit laborum nemo nihil non odio quia recusandae sed sequi, soluta temporibus veritatis.
          </p>
        </div>
      </div>

      <div class="post row">
        <div class="img col-12 col-md-4">
          <img src="assets/images/image_01_small.jpg" alt="..." class="img-thumbnail">
        </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Статья на тему динамического сайта...</a>
          </h3>
          <i class="far fa-user"> Имя Автора</i>
          <i class="far fa-calendar"> Mar 11, 2019</i>
          <p class="preview-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aliquid aperiam asperiores cumque distinctio doloremque eveniet excepturi fugit impedit laborum nemo nihil non odio quia recusandae sed sequi, soluta temporibus veritatis.
          </p>
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