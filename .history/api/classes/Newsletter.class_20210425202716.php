<?php
// newsletter model
class Newsletter {
  private PDO $conn;


  private function __construct ($conn) {
    $this -> conn = new ConnectDB();
  }
}
