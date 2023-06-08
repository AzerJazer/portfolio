<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/admin.css">
    <title>AvtoLab</title>
    <script src="script/script.js"></script>
</head>
<body>
<div class="form-box">

            <form action="adminp.php" method="post" class="form form_signin">
            <h1>Вход в Панель Администратора</h1>
                <h3 class="form__title">Вход</h3>

                <p>
                    <input type="text" name="name" class="form__input" placeholder="Логин">
                </p>
                <p>
                    <input type="password" name="pass" class="form__input" placeholder="Пароль">
                </p>
                <p>
                    <button class="form__btn">Войти</button>
                </p>
            </form>
</body>
</html>