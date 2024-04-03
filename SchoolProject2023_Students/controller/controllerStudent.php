<?php
class controllerStudent {
	public static function addStudentForm() {
		$rows = Model::getSpecialityList();
		include_once('view/addStudentForm.php');
	}

	public static function addStudentResult() {
		$result = modelStudent::addStudent();
		$_SESSION['result'] = $result;
		header('Location:result');
	}
	public static function viewResult() {
		include_once 'view/queryResult.php';
	}
	public static function editStudentForm($id) {
		$rows = Model::getSpecialityList();
		$student = Model::getStudent($id);
		include_once 'view/editStudentForm.php';
	}
	public static function editStudentResult($id) {
		$result = modelStudent::editStudent($id);
		$_SESSION['result'] = $result;
		header('Location:result');
	}
	public static function deleteStudent($id) {
		$result = modelStudent::deleteStudent($id);
		$_SESSION['result'] = $result;
		header('Location:result');
	}
}
?>