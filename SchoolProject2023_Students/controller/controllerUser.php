<?php
class controllerUser {
    public static function loginForm(){
        include_once('view/login.php');
    }
    
    public static function loginResult(){
        include_once('view/loginRegisterResult.php');
    }
    
    public static function logoutAction(){
        modelUser::userLogout();
        header('Location:./');
    }
    
}