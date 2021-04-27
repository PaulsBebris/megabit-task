<?php
class ConnectDB {
  function __construct () {
    public $DBH;

    try {
      return $this -> DBH = new PDO('mysql:host=127.0.0.1;dbname=webtask', 'webtask', 'webtask');
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
}