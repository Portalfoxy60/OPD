<?php
class modelUser {
    public static function userLogin(){
        if (isset($_SESSION['sessionId'])){
            $result = true;
        } else {
            $result = false;
            $_SESSION['error'] = 'Неправильно имя пользователя или пароль';
            if (isset($_POST['login'])){
                if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != "" && $_POST['password'] != ""){
                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    $password = filter_input(INPUT_POST, 'password');
                    $sql = "SELECT * FROM `users` WHERE `email`='".$email."'";
                    $database = new database();
                    $item = $database->getOne($sql);
                    
                    if ($item != null){
                        $password = $_POST['password'];
                        if ($email == $item['email'] && password_verify($password, $item['password'])){
                            $_SESSION['sessionId']=session_id();
                            $_SESSION['userId'] = $item['id'];
                            $_SESSION['name'] = $item['username'];
                            $_SESSION['role'] = $item['role'];
                            $_SESSION['email'] = $item['email'];
                            $result = true;
                        }
                    }
                
                }
            }
        }
        return $result;
    }
    public static function userLogout(){
        unset($_SESSION['sessionId']);
        unset($_SESSION['userId']);
        unset($_SESSION['name']);
        unset($_SESSION['role']);
        unset($_SESSION['email']);
    }
}