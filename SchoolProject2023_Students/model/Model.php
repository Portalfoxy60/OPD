<?php
/* для выборки данных из базы данных используем запросы,
 * class database из папки inc
 */
class Model {
	public static function getSpecialityList(){
        $query = "SELECT * FROM `speciality` order by `nameSpec`";
        $db = new database();
        $item = $db->getAll($query);
        return $item;
    }
	
    public static function getStudentList() {
        $query = "SELECT speciality.nameSpec, student.* FROM `speciality`, `student` WHERE speciality.id = student.specId ORDER BY speciality.nameSpec ASC, student.firstName ASC;";
        $db = new database();
        $item = $db->getAll($query);
        return $item;
    }

    public static function getSpecialityDetail($id){
        $query = "Select * FROM `speciality` WHERE `id`=".$id;
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
    public static function getStudentListByspec($id) {
        $query = "SELECT speciality.nameSpec, student.* FROM `speciality`, `student` WHERE speciality.id = student.specId AND speciality.id=".$id."  ORDER BY student.firstName ASC;";
        $db = new database();
        $item = $db->getAll($query);
        return $item;
    } 

    public static function getStudentDetail($id) {
        $query = "SELECT speciality.nameSpec, student.* FROM `speciality`, `student` WHERE speciality.id = student.specId AND student.id=".$id;
        $db = new database();
        $item = $db->getOne($query);
        return $item;
    }
    public static function getBlockList($id) {
        $query = "";
        $db = new database();
        $item = $db->getAll($query);
        return $item;
    }
}//END CLASS
?>