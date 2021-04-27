<?php
class ConnectDB {
  public PDO $DBH;

  function __construct () {
    try {
      $this -> DBH = new PDO('mysql:host=127.0.0.1;dbname=webtask', 'webtask', 'webtask');
      return $this -> DBH;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  public function getConnection () {
    // return $this -> DBH;
  }

}