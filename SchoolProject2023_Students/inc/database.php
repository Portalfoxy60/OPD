<?php

class Database {
    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    function __construct() {
        $this->host = 'localhost'; // имя хоста
        $this->user = 'root'; // имя пользователя
        $this->password = ''; // пароль
        $this->baseName = 'jktv_school'; // имя базы данных
        $this->connect(); // метод подключения к базе данных
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
        } catch (Exception $e) {
            die('Connection failed : '.$e->getMessage());
        }

        return $this->conn;
    }

    function disconnect() {
        if ($this->conn) {
            $this->conn = null;
        }
    }

    function getAll($query) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }

    function getOne($query) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }
}