<?php
trait DB {
  
  function get_db_connection () {
    $DBH = null;
    $host = "127.0.0.1";
    $db = "webtask";
    $user = "task";
    $password = "task";

    $dsn = "mysql:host=".$host.";dbname=".$db;
    try {
      $this->DBH = new PDO($dsn, $user, $password);
      // echo $this->DBH ? "DB connected ..." : "DB Error";
    } catch (\Throwable $th) {
      throw $th;
    }
    return $DBH;
  }
}