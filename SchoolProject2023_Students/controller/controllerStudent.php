<?php
class controllerStudent {
    public static function addStudentForm(){
        $rows = Model::getSpecialityList();
        include_once('view/addStudentForm.php');
    }
    public static function addStudentResult(){
        $result = modelStudent::addStudent();
        $_SESSION['result'] = $result;
        header('Location:result');
        
    }
    public static function viewResult(){
        include_once('view/queryResult.php');
    }
}
?>