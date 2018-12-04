<?php
    $mysqli = new mysqli('localhost', 'id7917578_diaryrogue', '161102161102a');
    
    /* проверка соединения */
    if (mysqli_connect_errno()) {
        printf("Соединение не удалось: %s\n", mysqli_connect_error());
        exit();
    }
?>