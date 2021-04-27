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
    return ("default");
  }

  public function saveEmail ($requestBody) {
    $email = $requestBody -> email;
    $provider = $requestBody -> provider;
    $registerdate = $requestBody -> registerdate;
    $stmt = $this -> conn -> prepare ('INSERT INTO newsletter (email, provider, registerdate) VALUES(:email, :provider, :registerdate)');
    $stmt -> bindValue(':email', $email, PDO::PARAM_STR);
    $stmt -> bindValue(':provider', $provider, PDO::PARAM_STR);
    $stmt -> bindValue(':registerdate', $registerdate, PDO::PARAM_STR);
    $result = $stmt -> execute();
    return $result;
  }


  /**
   * @return array sorted ASC or DESC
   * @sort argument must be exact string "ASC" or "DESC"
   * @order argument must be exact string "email" or "provider"
   */
  public function getEmails ( string $order = "email", string $sort = "ASC" ) {
    $stmt = $this -> conn -> prepare ('SELECT * FROM newsletter ORDER BY '. $order .' '. $sort);
    $stmt -> execute();
    $emails = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    // print_r($emails);
    return $emails;
  }


}
