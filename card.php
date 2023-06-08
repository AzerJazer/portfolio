<?php 

  $db = new PDO( dsn: "mysql:host=localhost;dbname=cataloq", 
  username:"root", password: "root");

  $info = [];

  if ($query = $db->query("SELECT * FROM `tovar`")) {
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    print_r($db->errorInfo());
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/card.css">
    <title>AvtoLab</title>
  <script src="../dd/script/banner.js"></script>
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
              <a class="navbar-brand" href="reg2.html">Войти</a>
            </form>
          </div>
        </div>
      </nav>
    <form class="form" action="db.php" method="post">
        <div class="title__inner">
            <h2 id="cataloq">
                Товар
            </h2>
        </div>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="image/card1.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title"><?= $data['model']?> <?= $data['name']?></h3>
                      <h5 class="card-title"></h5>
                        <p class="card-text"><?= $data['text']?></p>
                        <p class="card-text"><?= $data['power']?> <?= $data['power']?></p>
                        <p class="card-text"><?= $data['date']?></p>
                        <h4 class="card-text"><?= $data['price']?></h4>
                    </div>
                  </div>
                </div>
              </div>
      </form>
</body>
</html>