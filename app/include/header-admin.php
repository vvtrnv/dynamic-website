<!-- Шапка админ панели-->
<header class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h1><a href="<?php echo BASE_URL; ?>">My blog</a></h1>
      </div>
      <nav class="col-8">
        <ul>
          <li>
            <?php if(isset($_SESSION['id'])): ?>
              <a href="#"><i class="fa-solid fa-user"></i>
                <?php echo $_SESSION['login']; ?>
              </a>
            <?php endif; ?>
          </li>
          <li>
            <a href="<?php echo BASE_URL . "logout.php"; ?>">
              Выход
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>