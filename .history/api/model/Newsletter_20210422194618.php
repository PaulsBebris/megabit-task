<?php
require_once('DatabaseConnection.php');

class Newsletter {
  private $DBH;

  // public function __construct() {
  //   $this -> DBH = DatabaseConnection::get_db_connection();
  // }

  public function get_all_email_addresses () {
    $this -> DBH = DatabaseConnection::get_db_connection();
    $stmt = $this -> DBH -> prepare( "SELECT email FROM newsletter" );
    $stmt -> execute();
    $result = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    $stmt = null;
    $this -> DBH = null;
    return $result;
    // echo json_encode( $result );
  }

}
