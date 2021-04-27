<?php
require_once('DBConnection.model.php');

class Newsletter {
  private DBConnection $DBH;

  public function __construct()
  {
    $DBConnection = new DBConnection();
    $this -> DBH = $DBConnection -> get_db_connection();
  }

  public function get_all_email_addresses () {
    $stmt = $this -> DBH -> prepare( "SELECT email FROM newsletter" );
    $stmt -> execute();
    $result = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    $stmt = null;
    return json_encode($result);
  }

}
