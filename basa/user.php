<?php 
    $user = 'root';
    $password = 'root';
    $db = 'cataloq';
    $host = 'localhost';
    
    $link = mysqli_init();
    $induction = mysqli_connect($link, $host, $user, $password, $db);

    if (!$link) {
        echo"Error";
    }
?>