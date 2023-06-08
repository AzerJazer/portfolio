<?php

require_once '../login/connect.php';

$login = $_POST['login'];
$mail = $_POST['mail'];
$name = $_POST['name'];
$pass = $_POST['pass'];

mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `mail`, `name`, `pass`) 
VALUES (NULL, '$login', '$mail', '$name', '$pass')");

header('Location: /');