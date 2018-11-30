<?php
    session_start();
    class User{
        private $user_Id;
        private $user_Login;
        private $user_Pass;
        private $user_Priority;
        public $day;
        public $lesson;
        public function setUser($login,$pass,$my_DB){
            $shadow_User = $my_DB->query('SELECT * FROM `users_info` WHERE `login` = "'.$login.'" and `pass` = "'.$pass.'"');
            if($shadow_User->num_rows()!=1){
                return false;
            }
            else{
                $shadow_User_info = $shadow_User->fetch_assoc();
                $this->user_Id = $shadow_User_info['id'];
                $this->user_Login = $shadow_User_info['login'];
                $this->user_Pass = $shadow_User_info['pass'];
                $this->user_Priority = $shadow_User_info['priority'];
                return true;
            }
        }
        public function getUser($id){
            $shadow_User = $my_DB->query('SELECT * FROM `users_info` WHERE `id` = "'.$id.'"');
            if($shadow_User->num_rows()!=1){
                return false;
            }
            else{
                $shadow_User_info = $shadow_User->fetch_assoc();
                $this->user_Id = $shadow_User_info['id'];
                $this->user_Login = $shadow_User_info['login'];
                $this->user_Pass = $shadow_User_info['pass'];
                $this->user_Priority = $shadow_User_info['priority'];
                return true;
            }
        }
        public function getScore($my_DB){
            $shadow_Score = $my_DB->query('SELECT * FROM `scores` WHERE `user_id` = "'.$this->user_Id.'" and `lesson` = "'.$this->lesson.'" and `day` = "'.$this->day.'"');
            if($shadow_Score->num_rows()==0){
                return false;
            }
            else{
                $array = [];
                $key = 0;
                while ($shadow_Score_info = $shadow_Score->fetch_assoc()){
                    $array[$key] = $shadow_Score_info['score'];
                    $key += 1;
                }
                return true;
            }
        }
    }
?>