<?php

class Newsletter {
  
  private function get_db_connection () {
    $DBH = null;
    $host = "127.0.0.1";
    $db = "webtask";
    $user = "task";
    $password = "task";

    $dsn = "mysql:host=".$host.";dbname=".$db;
    try {
      $DBH = new PDO($dsn, $user, $password);
      // echo $this->DBH ? "DB connected ..." : "DB Error";
      return $DBH;
    } catch (\Throwable $th) {
      throw $th;
      die();
    }
  }

  public function get_all_email_addresses () {
    $con = $this -> get_db_connection();
    var_dump($con);
    // $con -> prepare("SELECT * FROM newsletter");
    // $con -> execute();
    // $result = $con -> fetchAll();
  }

}
