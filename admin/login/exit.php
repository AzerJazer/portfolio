<?php
    setcookie('user', $user['name'], time() - 3600 * 
    24 * 31, "/");
    header('Location: ../index.php')
?>