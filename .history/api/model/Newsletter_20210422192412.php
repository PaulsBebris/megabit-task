<?php
require_once('./DatabaseConnection.php');

class Newsletter {
  private $DBH = self::get_db_connection();


  public function get_all_email_addresses () {

    $stmt = $this->DBH -> prepare("SELECT email FROM newsletter");
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
  }

}
