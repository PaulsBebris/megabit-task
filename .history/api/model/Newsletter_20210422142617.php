<?php
// require_once(__DIR__."../traits/DB.php");

class Newsletter {
  use DB;

  function get_all_email_addresses () {
    $r = DB -> get_all_email_addresses();
  }

}
