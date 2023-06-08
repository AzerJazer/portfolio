<?php 

  $db = new PDO( dsn: "mysql:host=localhost;dbname=cataloq", 
  username:"root", password: "root");

  $info = [];

  if ($query = $db->query("SELECT * FROM `tovar1`")) {
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    print_r($db->errorInfo());
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/goods.css">
    <title>AvtoLab</title>
  <script src="../dd/script/banner.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <img src="../dd/image/loqo.png" width="50" height="50" class="d-inline-block align-top logo" alt="" loading="lazy">  
    <a class="navbar-brand" href="#">AvtoLab</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="nav justify-content-center">
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
        <a class="navbar-brand" href="reg2.html">Войти</a>
      </form>
    </div>
  </div>
</nav>

<div class="conteiner">
  <div class="sur">
    <div class="row">
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="240" height="240" src="image/akci.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>Игрушки</h2>
          <p>Мягкие игрушки на любой вкус. А также популярные в Японии Дон-кун по мягкой цене, украсит экстерьер вашего автомобиля</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="240" height="240" src="image/akci1.jpeg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>Брелки</h2>
          <p>Брелков много не бывает, выбирайте на любой вкус и цвет, можете даже подобрать под цвет вашего автомобиля</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="240" height="240" src="image/akci2.png" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>

          <h2>Машины</h2>
          <p>Вам малого вашего автомобиля? Или не хватает на автомобиль мечты? Вы так же можете приобрести игрушечкую модель вашего автомобиля.</p>
        </div><!-- /.col-lg-4 -->
        <div class="title__inner">
      <h2 id="cataloq">
          Каталог товаров
      </h2>
      <hr class="featurette-divider">
  </div>
    </div>
  </div>

  
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <?php foreach ($info as $data): ?>
    <div class="col">
      <div class="card" style="width: 24rem;">
    <img src="<?= $data['img'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $data['title'] ?></h5>
      <p class="card-text"><?= $data['text'] ?></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><?= $data['made'] ?></li>
      <li class="list-group-item"><?= $data['price'] ?></li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Нравится</a>
      <a href="#" class="card-link">В корзину</a>
    </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  
  <hr class="featurette-divider">
</div>

<footer class="container">
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
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>    
</html> 
