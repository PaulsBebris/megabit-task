<?php
require_once('./DatabaseConnection.php');

class Newsletter {

  public function get_all_email_addresses () {
    $DBH = DatabaseConnection::get_db_connection();
    $stmt = $this->DBH -> prepare("SELECT email FROM newsletter");
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
  }

}
