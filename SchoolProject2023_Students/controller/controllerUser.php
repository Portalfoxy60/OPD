<?php
class controllerUser {
    public static function loginForm(){
        include_once('view/login.php');
    }
    
    public static function loginResult(){
        $resultRegIn=modelUser::userLogin();
        include_once('view/loginRegisterResult.php');
        // include_once('model/modelUser.php');
    }
    
    public static function logoutAction(){
        modelUser::userLogout();
        header('Location:./');
    }
    
}