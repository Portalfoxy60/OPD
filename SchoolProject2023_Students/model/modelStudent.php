<?php
class modelStudent {
	public static function addStudent() {
		$result = false;
		if(isset($_POST['save'])) {
			$firstName = $_POST['firstName'];
			$dateBirth = $_POST['dateBirth'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$year = $_POST['year'];
			$mobil = $_POST['mobil'];
			$specid = $_POST['specid'];
			
			$photo = $_FILES['picture']['name'];
				if($photo != '') {
					$uploadfile = 'images/'.basename($_FILES['picture']['name']);
					move_uploaded_file($_FILES['picture']['tmp_name'],$uploadfile);
				}
			
			$sql = "INSERT INTO student(`firstName`,dateBirth,`address`,`gender`,`year`,mobil,specid, photo) VALUE('$firstName','$dateBirth','$address','$gender','$year','$mobil','$specid', '$photo')";
			$database = new database();
			$item = $database->executeRun($sql);
			if ($item == true) {
				$result = true;
			}
		}
		return $result;
	}

	public static function editStudent($id) {
		$result = false;
		if(isset($_POST['save'])) {
			$firstName = $_POST['firstName'];
			$dateBirth = $_POST['dateBirth'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$year = $_POST['year'];
			$mobil = $_POST['mobil'];
			$specid = $_POST['specid'];
			$oldphoto = $_POST['oldpicture'];
			
			$photo = $_FILES['picture']['name'];
				if($photo != '' and $photo != $oldphoto) {
					$uploadfile = 'images/'.basename($_FILES['picture']['name']);
					move_uploaded_file($_FILES['picture']['tmp_name'],$uploadfile);
					unlink("images/".$oldphoto);
				}
				else {
					$photo = $oldphoto;
				}
			
			$sql = "UPDATE student SET firstName='$firstName', dateBirth='$dateBirth', address='$address', gender='$gender',year='$year', mobil='$mobil', specid='$specid', photo='$photo' WHERE student.id=$id";
			$database = new database();
			$item = $database->executeRun($sql);
			if ($item == true) {
				$result = true;
			}
		}
		return $result;
	}
	public static function deleteStudent($id){
		$result = false;
		if(isset($_POST['delete'])) {
			unlink("images/".$_POST['photo']);
			$sql = "DELETE FROM student WHERE student.id = $id";
			$database = new database();
			$item = $database->executeRun($sql);
			if ($item == true) {
				$result = true;
			}
		}
		return $result;
	}
}
?>