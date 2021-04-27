<?php
class ConnectDB {
  private PDO $DBH;

  function __construct () {
    try {
      return $this -> DBH = new PDO('mysql:host=127.0.0.1;dbname=webtask', 'webtask', 'webtask');
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
}