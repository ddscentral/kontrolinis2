<?php

class Database
{
    private static $conn;
    private static $instance;

    private function __construct() {
        if (!extension_loaded('mysqli')) {
            die("PHP MySQL not installed !");
        }

        self::$conn = new mysqli(
            'localhost',
            'kontrolinis',
            'kontrolinis2',
            'kontrolinis2'
        );

        if (self::$conn->connect_errno) {
            die('Database connection failed: ' . self::$conn->mysqli_error);
        }
    }

    public function __destruct() {
        self::$conn->close();
    }

    private function __clone() {

    }

    public function query($sql) {
        return self::$conn->query($sql);
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
}
