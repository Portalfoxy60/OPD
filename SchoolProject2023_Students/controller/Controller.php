<?php
class Controller { 
    public static function startSite(){
        $specialityList = Model::getSpecialityList();
        include_once('view/homepage.php');
        return ;
    }
    public static function error404(){
        include_once('view/error404.php');
        return ;
    }
	public static function studentList(){
        $specialityList = Model::getSpecialityList();
        $studentList = Model::getStudentList();
        include_once('view/studentlist.php');
        return ;
    }
    public static function studentByspec($id){
        $specialityList = Model::getSpecialityList();
        $specialityDetail = Model::getSpecialityDetail($id);
        $studentList = Model::getStudentListByspec($id);
        include_once('view/studentlist.php');
        return ;
    }
    public static function studentDetail($id){
        $specialityList = Model::getSpecialityList();
        $student = Model::getStudentDetail($id);
        include_once('view/studentdetail.php');
        return ;
    }
    public static function blockList(){
        $blocks = ModelBlocks::getBlock();
        include_once('view/blocks.php');
        return ;
    }
    public static function blockDetail($id){
        $blockDetail = ModelBlocks::getBlockDetail($id);
        include_once('view/detailnews.php');
        return ;
    }
}//END CLASS
?>
