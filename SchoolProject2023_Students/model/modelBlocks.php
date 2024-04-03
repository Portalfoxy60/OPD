<?php
class ModelBlocks
{
    public static function addBlock()
    {
        $result = false;
        if (isset($_POST['save'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image = $_POST['image'];
            $date = $_POST['date'];
            $categoryId = $_POST['categoryId'];
            if ($image != ""){
                $uploadfile = 'images/blocks/'.basename($_FILES['picture']['name']);
                move_uploaded_file($_FILES['picture']['tmp_name'],$uploadfile);
            }
            $sql = "INSERT INTO `post` (`id`,`title`,`description`,`image`,`date`,`categoryId`) VALUES (NULL, '$title','$description','$image','$date','$categoryId')";
            $database = new database();
            $item = $database->executeRun($sql);
            if($item == true){
                $result = true;
            }
            
        }
        return $result;
    }
    public static function getBlock()
    {   
        $result=[];
        if (isset($_GET['categoryId'])){
            $categoryId=$_GET['categoryId'];
            $getsql = "SELECT posts.*, categories.id as catId,categories.name from `posts` JOIN  categories ON categories.id = posts.category_id WHERE category_id = $categoryId";
            $database = new database();
            $item = $database->getAll($getsql);
            if ($item==true){
                $result = $item;
            }
        } else {
            $getsql = "SELECT * from `posts` JOIN  categories ON categories.id = posts.category_id";
            $database = new database();
            $item = $database->getAll($getsql);
            if ($item==true){
                $result = $item;
            }
        }
        return $result;
    }
    public static function getBlockDetail($id){
        $result = null;
        if (isset($id)){ 
            $sql = "SELECT * FROM `posts` JOIN  categories ON categories.id = posts.category_id WHERE posts.id = $id";
            $database = new database();
            $item = $database->getOne($sql);
            if($item !== null){
                $result = $item;
            }
        }
        return $result;
    }
    public static function getDistinctMonths()
    {
        $sql = "SELECT DISTINCT MONTH(date) AS month FROM posts";
        $database = new database();
        $months = $database->getAll($sql);
        return $months;
    }
}


?>