<?php

class database {
    private $conn;
    private $host;
    private $user;
    private $password;
    private $basename;

    function __construct() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->basename = 'newsportal_db';
        $this->connect();
    }

    function __destruct() {
        $this->disconnect();
    }

    // Исправлено название функции на function
    function connect() {
        if (!$this->conn) {
            try {
                // Исправлен синтаксис подключения через PDO
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->basename, $this->user, $this->password, 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            } catch (Exception $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
        return $this->conn;
    }

    function disconnect() {
        if ($this->conn) {
            $this->conn = null;
        }
    }

    function getOne($query) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetch();
        return $response;
    }

    function getAll($query) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetchAll();
        return $response;
    }

    // Исправлено название функции на executeRun
    function executeRun($query) {
        $response = $this->conn->exec($query);
        return $response;
    }
}
