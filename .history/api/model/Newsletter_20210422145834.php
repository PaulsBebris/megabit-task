<?php

class Newsletter {
  
  private function get_db_connection () {
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

  public function get_all_email_addresses () {
    $con = $this -> get_db_connection();
    $con -> prepare("SELECT * FROM newsletter");
    $con -> execute();
    // $result = $con -> fetchAll();
    // var_dump($con);
  }

}
