<?php
// newsletter model
class Newsletter {
  private PDO $conn;

  public function __construct () {
    $conn = new ConnectDB();
    $this -> conn = $conn -> getConnection();
  }

  public function getAllEmails ($sort) {
    ($sort === "ASC" || $sort === "DESC") ? $sort : "ASC";
    $stmt = $this -> conn -> prepare ("SELECT * FROM newsletter ORDER BY email ". $sort);
    $stmt -> execute();
    $emails = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    print_r($emails);
    return $emails;
  }


}
