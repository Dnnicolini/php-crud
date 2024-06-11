<?php

namespace App\Lib;

use PDO;

class Database extends PDO{
    private $db_name = 'crud';
    private $db_user = 'root';
    private $db_pass = 'root123';
    private $db_host = 'localhost:3018';
    public $conection;

    public function __construct()
    {
        try {
            $this->conection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass); 
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}