<?php
class Newsletter {
  public $DBH;
  
  function __construct () {
    $host = "localhost";
    $db = "webtask";
    $user = "task";
    $password = "task";

    $dsn = "mysql:host=localhost;dbname=webtask";
    try {
      $this->DBH = new PDO($dsn, $user, $password);
      echo $this->DBH ? "DB connected ..." : "DB Error";
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
