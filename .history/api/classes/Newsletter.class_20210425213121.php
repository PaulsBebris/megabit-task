<?php
// newsletter model
class Newsletter {
  private PDO $conn;

  public function __construct () {
    $conn = new ConnectDB();
    $this -> conn = $conn -> getConnection();
  }

  public function getAllEmails () {
    $stmt = $this -> conn -> prepare ("SELECT * FROM newsletter ORDER BY email");
    $stmt -> execute();
    $emails = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    return $emails;
  }


}
