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
   * @return array sorted
   * @sort argument must be exact string "ASC" or "DESC", default is "ASC"
   * @group argument must be exact string "email" or "provider", default "registerdate"
   */
  public function getEmails ( $requestBody ) {
    $order = strtolower( $requestBody -> order );
    $sort = strtoupper( $requestBody -> sort );
    $stmt = $this -> conn -> prepare ( 'SELECT * FROM newsletter ORDER BY '. $order .' '. $sort );
    $stmt -> execute();
    $emails = $stmt -> fetchAll( PDO::FETCH_ASSOC );
    return json_encode( $emails );
  }
}
