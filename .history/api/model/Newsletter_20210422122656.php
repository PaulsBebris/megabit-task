<?php
class Newsletter {
  private $host = "localhost";
  private $db = "newsletter";
  private $user = "";
  private $password = "";
  public $conn = null;

  function __construct () {
    $dsn = "mysql:host".self::$host.";dbname=".self::$db;
    try {
      self::$conn = new PDO($dsn, self::$user, self::$password);
      echo self::$conn ? "DB connected ..." : "DB Error";
    } catch (\Throwable $th) {
      throw $th;
    }
  }

}
