<?php
class Newsletter {
  public $DBH;
  
  function __construct () {
    $host = "127.0.0.1";
    $db = "webtask";
    $user = "task";
    $password = "task";

    $dsn = "mysql:host=".$host.";dbname=webtask";
    try {
      $this->DBH = new PDO($dsn, $user, $password);
      echo $this->DBH ? "DB connected ..." : "DB Error";
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}