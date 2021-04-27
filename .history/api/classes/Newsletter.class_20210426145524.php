<?php
// newsletter Model
class Newsletter {
  // in not typed here because can be different DB connection type
  private $conn;

  public function __construct () {
    $conn = new ConnectDB();
    $this -> conn = $conn -> getConnection();
  }

  function default () {
    return json_encode ([]);
  }

  public function saveEmail ($requestBody) {
    $email = $requestBody['email'];
    $provider = $requestBody['provider'];
    $registerdate = $requestBody['registerdate'];
    $stmt = $this -> conn -> prepare ("INSER INTO newsletter (email, provider, registerdate) VALUES(:email, :provider, :registerdate)");
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':provider', $provider);
    $stmt -> bindParam(':registerdate', $registerdate);
    $stmt -> execute();
    return json_encode ("true");
  }


  /**
   * @return array sorted ASC or DESC
   * @sort argument must be exact string "ASC" or "DESC"
   */
  public function getAllEmails (string $sort = "ASC") {
    $stmt = $this -> conn -> prepare ("SELECT * FROM newsletter ORDER BY email ". $sort);
    $stmt -> execute();
    $emails = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    // print_r($emails);
    return $emails;
  }


}
