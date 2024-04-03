<?php

class database {

    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    function __construct() {
		$this->host = 'localhost'; //hostname
        $this->user = 'root'; //username
        $this->password = ''; //password
        $this->baseName = 'jktv_school'; //name of your database        
        $this->connect(); //метод соединения с базой данных
    }

    function __destruct() {
        $this->disconnect();
    }

    function connect() {
        try {
            $this->conn = new PDO(
                    'mysql:host='.$this->host.''
                    .';dbname='.$this->baseName.'',
                    $this->user, 
                    $this->password, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					//$this-> conn - идентификатор базы данных
        } catch (Exception $e) {
            die('Connection failed : '.$e->getMessage());//вывод об ошибке соединения
        }

        return $this->conn;//$this-> conn - идентификатор базы данных
    }
    

    function disconnect() {
        if ($this->conn) {// автомтическое выключение/подключение к БД
            $this->conn = null;
        }
    }
//----------ДОБАВЬТЕ МЕТОДЫ ОБРАБОТКИ ЗАПРОСОВ!

    function getOne($query) {
        try{
            $result = $this->conn->prepare($query);
            $result->execute();
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $response = $result->fetch();
            return $response;
        } catch(Exception $ex) {
            echo "Error:".$ex->getMessage();
        }
    }

    function getAll($query) {
        try{
            $result = $this->conn->prepare($query);
            $result->execute();
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $response = $result->fetchAll();
            return $response;
        } catch(Exception $ex) {
            echo "Error:".$ex->getMessage();
        }
    }

    function executeRun($query) {
        try{
            $response = $this->conn->exec($query);
            return $response;

        } catch(Exception $ex) {
            echo "Error:".$ex->getMessage();
        }
    }

}//end class
?>