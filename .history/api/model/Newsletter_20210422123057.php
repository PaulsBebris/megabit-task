<?php
class Newsletter {
  private $host = "localhost";
  private $db = "newsletter";
  private $user = "";
  private $password = "";
  public $conn = null;

  function __construct ($host, $db, $conn, $user, $password) {
    $dsn = "mysql:host".$this->$host.";dbname=".$this->$db;
    try {
      $this->$conn = new PDO($dsn, $this->$user, $this->$password);
      echo $this->$conn ? "DB connected ..." : "DB Error";
    } catch (\Throwable $th) {
      throw $th;
    }
  }

}
