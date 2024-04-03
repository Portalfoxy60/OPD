<?php

class Model
{

	public static function getSpecialityList()
	{
		$query = "SELECT * FROM `speciality` ORDER BY `nameSpec` ASC;";
		$db = new database();
		$item = $db->getAll($query);
		return $item;
	}

	public static function getStudentList()
	{
		$query = "SELECT student.id, student.firstName, student.dateBirth, student.gender, student.address, student.year, student.mobil, student.photo, speciality.nameSpec FROM student INNER JOIN speciality ON student.specid=speciality.id ORDER BY speciality.nameSpec ASC;";
		$db = new database();
		$item = $db->getAll($query);
		return $item;
	}

	public static function getStudent($id)
	{
		$query = "SELECT speciality.nameSpec, student.* FROM speciality INNER JOIN student on student.specid=speciality.id WHERE student.id=$id";
		$db = new database();
		$item = $db->getOne($query);
		return $item;
	}

	public static function getSpecialityDetail($id)
	{
		$query = "SELECT * FROM `speciality` WHERE `id`=" . $id;
		$db = new database();
		$item = $db->getOne($query);
		return $item;
	}

	public static function getStudentListBySpec($id)
	{
		$query = "SELECT speciality.nameSpec, student.* FROM speciality INNER JOIN student on student.specid=speciality.id WHERE speciality.id=$id ORDER BY student.firstName ASC;";
		$db = new database();
		$item = $db->getAll($query);
		return $item;
	}
    // public static function getSearch($text){
    //     $query = "SELECT posts.*, categories.name FROM posts INNER JOIN categories on categories.id=posts.category_id WHERE posts.title LIKE '%$text%' OR posts.description LIKE '%$text%';";
	// 	$db = new database();
	// 	$item = $db->getAll($query);
	// 	return $item;
    // }
} 
