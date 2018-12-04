<?php
    session_start();
    $data = $_POST;
    if(isset($data)){
        include "db.php";
        include "user.php";
        $login = $data['login']->mysql_real_escape_string();
        $pass = $data['pass']->mysql_real_escape_string();
        $user = new user;
        
    }
?>