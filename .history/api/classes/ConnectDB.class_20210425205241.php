<?php
class ConnectDB {
  public $DBH;

  function __construct () {
    try {
      $this -> DBH = new PDO('mysql:host=127.0.0.1;dbname=webtask', 'task', 'task');
      return $this -> DBH;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  public function getConnection () {
    var_dump($this -> DBH);
    return $this -> DBH;
  }

}