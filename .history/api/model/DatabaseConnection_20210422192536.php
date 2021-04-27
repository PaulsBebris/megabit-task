<?php
class DatabaseConnection {
  
  
  public static function get_db_connection () {
    $host = "127.0.0.1";
    $db = "webtask";
    $user = "task";
    $password = "task";
    $dsn = "mysql:host=".$host.";dbname=".$db;
    try {
      return new PDO($dsn, $user, $password);
    } catch (\Throwable $th) {
      throw $th;
      die();
    }
  }
}