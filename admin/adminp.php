<?php

    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', 'root', 'cataloq');
    
    $result = $mysql->query("SELECT * FROM `admin` WHERE `name` = 
    '$name' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }


    $mysql->close();

    header('Location: adminpan.php')
?>