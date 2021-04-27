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
    } catch (\Throwable $th) {
      throw $th;
    }
    return $DBH;
  }

  public function get_all_email_addresses () {
    $con = $this -> get_db_connection();
    // $con -> prepare("SELECT * FROM newsletter");
    // $con -> execute();
    echo "xxx";
  }

}
