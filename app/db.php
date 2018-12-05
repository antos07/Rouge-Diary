<?php
    $mysqli = new mysqli('localhost', 'root', '');
    
    /* проверка соединения */
    if (mysqli_connect_errno()) {
        printf("Соединение не удалось: %s\n", mysqli_connect_error());
        exit();
    }
?>