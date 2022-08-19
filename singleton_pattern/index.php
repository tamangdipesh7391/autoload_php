<?php 

class Database
{
    private const hostname = 'localhost';
    private const username = 'root';
    private const password = '';
    private const dbname = 'travels';
    private const port = 3306;
    private $db;
    private static $instance;

    public function __construct()
    {
        $this->db = new mysqli(self::hostname, self::username, self::password, self::dbname, self::port);
        if($this->db->connect_error)
        {
            die('Connection failed: ' . $this->db->connect_error);
        }else{
            echo 'Connected successfully';
        }
    }

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new Database();
        }else{
            return self::$instance;
        }
    }
}

$db = Database::getInstance();

