<?php
    session_start();
    class user{
        private $id;
        private $name_user;
        private $password;
        private $login;
        public function login($login,$pass){
            $query = "SELECT * FROM `users` WHERE `login` = '".$login."' and `pass` = '".$pass."'";
            $res = $mysqli->query($query);
            $row_cnt = $result->num_rows;
            if($row_cnt!=1){
                printf("Соединение не удалось: No such user");
                exit();
            }
        }
    }
?>