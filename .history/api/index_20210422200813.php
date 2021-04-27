<?php
require_once(__DIR__ ."/model/Newsletter.php");

// get url from request
$path = parse_url(  $_SERVER['REQUEST_URI'], PHP_URL_PATH );
// get endpoint
// get payload
// do the job
// return results
echo $path;
function test ()
{
  header("Access-Control-Request-Headers: Content-Type");
  header("Access-Control-Allow-Headers: *");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header("Access-Control-Allow-Origin: http://localhost:8081", false);
  header('Content-type: application/json; charset=utf-8');
  // echo json_encode(["some" => "test"]);
  $nl = new Newsletter();
  // echo $nl->get_all_email_addresses();
} 
  
$routes = [
  "/" => "no endpoint called",
  "get-all-emails" => "get_all_email_addresses"
];  
  
$active_route = '';
$active_route();

  