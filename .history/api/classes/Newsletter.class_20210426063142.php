<?php
// newsletter model
class Newsletter {
  // in not typed here because can be different DB connection type
  private $conn;

  public function __construct () {
    $conn = new ConnectDB();
    $this -> conn = $conn -> getConnection();
  }

  /**
   * @return array sorted ASC or DESC
   * @sort must be exactly "ASC" or "DESC"
   */
  public function getAllEmails (string $sort = "ASC") {
    $stmt = $this -> conn -> prepare ("SELECT * FROM newsletter ORDER BY email ". $sort);
    $stmt -> execute();
    $emails = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    // print_r($emails);
    return $emails;
  }


}