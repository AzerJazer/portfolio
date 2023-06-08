<?php
$mysql = new mysqli('localhost', 'root1', 'root', 'register-db');

if (!$mysql) {
    echo 'Error connect';
}
?>