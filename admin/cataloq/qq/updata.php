<?php 
    require_once '../../login/connect.php';

    $name_id = $_GET['id'];
    $name = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$name_id'");
    $name = mysqli_fetch_assoc($name);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/table.css">
    <title>AvtoLab</title>
</head>
<body>

<h3>Изменить пользователя</h3>
        <form action="updata2.php" method="post">
            <input type="hidden" name="id" value="<?= $name['id'] ?>">
            <p>login</p>
            <input type="text" name="login" value="<?= $name['login'] ?>">
            <p>mail</p>
            <input type="text" name="mail" value="<?= $name['mail'] ?>">
            <p>name</p>
            <input type="text" name="name" value="<?= $name['name'] ?>">
            <p>password</p>
            <input type="text" name="pass" value="<?= $name['pass'] ?>">
            <button type="submit">Изменить</button>
        </form>
</body>
</html>
