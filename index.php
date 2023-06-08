<?php
$mysql = new mysqli('localhost', 'root', 'root', 'register-db');

if (!$mysql) {
    echo 'Error connect';
}
?>

<?php 

  include '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="http://kit.fontawesome.com/3d0e27e432.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <title>AvtoLab</title>
    <script src="script/banner.js"></script>
    <script src="script/script.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid"> 
  <img src="../dd/image/loqo.png" width="50" height="50" class="d-inline-block align-top logo" alt="" loading="lazy">  
    <a class="navbar-brand" href="#">AvtoLab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Каталог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="goods.php">Товары</a>
        </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Услуги
                        </a>
                        <ul class="dropdown-menu" aria-labellsedby="navbarDropdown">
                          <li><a class="dropdown-item" href="reg.html">Тест-драйв</a></li>
                          <li><a class="dropdown-item" href="call.html">Обратная связь</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="location.html">О нас</a></li>
                        </ul>
                      </li>
                      
      </ul>
      <form class="d-flex">
        
        <?php
          if($_COOKIE['user'] == ''):
        ?>
        <a class="navbar-brand" href="reg2.html">Войти</a>
        <?php else:?> 
          <?=$_COOKIE['user']?>.
          <a class="navbar-brand" href="basa/exit.php">Выйти</a></p>
        <?php endif;?> 
      </form>
    </div>
  </div>
</nav>

<main>
  <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="image/bg1.png" class="w-100 d-block" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="image/bg2.jpg" class="w-100 d-block" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="image/bg3.jpg" class="w-100 d-block" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img src="image/bg4.jpg" class="w-100 d-block" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img src="image/bg5.jpg" class="w-100 d-block" alt="Third slide">
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
        


    <form class="form">
      <div class="title__inner">
        <h2 id="cataloq">
          Каталог товаров
        </h2>
          <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Поиск</button>
          <div class="wrapper">
            <div class="cart-na v">
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
                <span>Корзина</span>
              </div>
                <item-count>0</item-count>
            </div> 
          </div>
      </div>
      <?php foreach ($info as $data): ?>
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4 card-img-block">
            <img src="<?= $data['img']; ?>" class="img-fluid rounded-start card-img" alt="...">
          </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title"><?= $data['model']?> <?= $data['name']?></h3>
                <h5 class="card-title"></h5>
                  <p class="card-text"><?= $data['text']?></p>
                  <p class="card-text"><?= $data['power']?> <?= $data['box']?></p>
                  <p class="card-text"><?= $data['date']?></p>
                  <h4 class="card-text"><?= $data['price']?></h4>
              </div>
              <div class="buttons">
                  <button type="button" class="btn btn-outline-danger">В корзину</button>
              </div>
              <a class="dropdown-item" href="card.php">Подробнее</a>
            </div>
        </div>
      </div>
      <?php endforeach; ?>
    </form>
  <hr class="featurette-divider">
</main>
<footer class="container">
<footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
    </div>
    <ul class="social">
        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-linkedin"><ion-icon></a></li>
    </ul>
    <ul class="menu">
        <li><a href="index.php">Главная</a></li>
        <li><a href="goods.php">Товары</a></li>
        <li><a href="location.html">О нас</a></li>
        <li><a href="reg.html">Тест-драйв</a></li>
        <li><a href="call.html">Обратная связь</a></li>
    </ul>
    <p>©2023 Avtolab | All Rights Reserved</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </footer>
  <script src="script/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>    
</html>