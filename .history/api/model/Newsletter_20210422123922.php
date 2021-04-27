<?php
class Newsletter {
  public $DBH;
  
  function __construct () {
    $host = "localhost";
    $db = "webtask";
    $user = "task";
    $password = "task";

    $dsn = "mysql:host".$this->$host.";dbname=".$this->$db;
    try {
      $this->DBH = new PDO($dsn, $this->$user, $this->$password);
      echo $this->DBH ? "DB connected ..." : "DB Error";
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
