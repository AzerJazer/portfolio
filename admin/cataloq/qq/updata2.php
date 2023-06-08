<?php

require_once '../../login/connect.php';

$id = $_POST['id'];
$login = $_POST['login'];
$mail = $_POST['mail'];
$name = $_POST['name'];
$pass = $_POST['pass'];

mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `mail` = '$mail', `name` = '$name', `pass` = '$pass' WHERE `users`. `id` = $id");

header('Location: ../contact.php  ');
?>