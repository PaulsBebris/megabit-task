<?php
// newsletter model
class Newsletter {
  private PDO $conn;

  public function __construct () {
    $conn = new ConnectDB();
    $this -> conn = $conn -> getConnection();
  }

  public function getAllEmails () {
    $stmt = $this -> conn -> prepare ("SELECT * FROM newsletter");
    $stmt -> execute();
    $emails = $stmt -> fetchAll();
    var_dump($emails);
    return $emails;
  }


}
