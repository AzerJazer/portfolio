<?php
    require_once '../login/connect.php'



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
    <div>
    <h1 class="ban">Редактирование пользователей</h1>
        <table>
            <tr>
            
                <th>id</th>
                <th>login</th>
                <th>mail</th>
                <th>name</th>
                <th>password</th>
            </tr>

            <?php
                $name = mysqli_query($connect, "SELECT * FROM `users`");
                $name = mysqli_fetch_all($name);
                foreach ($name as $name) {
            ?>                       
                    
                <tr>
                    <td><?= $name[0] ?></td>
                    <td><?= $name[1] ?></td>
                    <td><?= $name[2] ?></td>
                    <td><?= $name[3] ?></td>
                    <td><?= $name[4] ?></td>
                    <td><a href="qq/updata.php?id=<?= $name[0] ?>">Изменить</a></td>
                    <td><a href="qq/delete.php?id=<?= $name[0] ?>">Удалить</a></td>
                </tr>
            <?php
                }
            ?>
            
        </table>
        <h3>Добавить новый продукт</h3>
        <form action="../login/create.php" method="post">
            <p>login</p> 
            <input type="text" name="login">
            <p>mail</p>
            <input type="text" name="mail">
            <p>name</p>
            <input type="text" name="name"> 
            <p>password</p>
            <input type="text" name="pass">
            <button type="submit">Добавить</button>
        </form>
    </div>
</body>
</html>
