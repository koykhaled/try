<?php

namespace app\database;

use PDO;
use PDOException;

class Connection
{
  public $host = 'localhost';
  public $username = 'root';
  public $password = 'kiko';
  public $database = 'task';


  public function getConnection()
  {
    try {
      $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }
    return $conn;
  }
}