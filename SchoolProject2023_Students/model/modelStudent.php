<?php
class modelStudent 
{
    public static function addStudent()
    {
        $result = false;
        if (isset($_POST['save'])){
            $firstName = $_POST['firstName'];
            $dateBirth = $_POST['dateBirth'];
            $address = $_POST['address'];
            $year = $_POST['year'];
            $mobil = $_POST['mobil'];
            $photo = $_FILES['picture']['name'];
            $specId = $_POST['specId'];
            $gender = $_POST['gender'];
            if ($photo != ""){
                $uploadfile = 'images/'.basename($_FILES['picture']['name']);
                move_uploaded_file($_FILES['picture']['tmp_name'],$uploadfile);
            }
            $sql = "INSERT INTO `student` (`id`,`firstName`,`dateBirth`,`gender`,`address`,`year`,`mobil`,`photo`,`specId`) VALUES (NULL, '$firstName','$dateBirth','$gender','$address','$year','$mobil','$photo','$specId')";
            $database = new database();
            $item = $database->executeRun($sql);
            if($item == true){
                $result = true;
            }
        }
        return $result;
    }
}
?>