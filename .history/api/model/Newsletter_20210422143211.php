<?php
require_once(__DIR__."/../traits/XXX.php");

class Newsletter {
  use XXX;

  function get_all_email_addresses () {
    $r = get_db_connection();
  }

}
