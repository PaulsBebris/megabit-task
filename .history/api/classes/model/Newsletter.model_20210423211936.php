<?php
require_once('DBConnection.model.php');

class Newsletter {
  private DBConnection $db_conn;

  public function __construct()
  {
    $DBC = new DBConnection();
    $this -> db_conn = $DBC -> get_db_connection();
  }

  public function get_all_email_addresses () {
    $stmt = $this -> DBH -> prepare( "SELECT email FROM newsletter" );
    $stmt -> execute();
    $result = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    $stmt = null;
    return json_encode($result);
  }

}