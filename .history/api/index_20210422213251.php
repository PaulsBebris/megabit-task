<?php
require_once (__DIR__ ."/model/Newsletter.php");

// get url from request
$path = substr( parse_url(  $_SERVER['REQUEST_URI'], PHP_URL_PATH ), 1 );
// get endpoint
// get payload
// do the job
// return results
// echo $path . "<br />";

function default_route () {
  header("Access-Control-Request-Headers: Content-Type");
  header("Access-Control-Allow-Headers: *");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header("Access-Control-Allow-Origin: http://localhost:8081", false);
  header('Content-type: application/json; charset=utf-8');
  echo "default route";
}

function get_all_email_addresses ()
{
  header("Access-Control-Request-Headers: Content-Type");
  header("Access-Control-Allow-Headers: *");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header("Access-Control-Allow-Origin: http://localhost:8081", false);
  header('Content-type: application/json; charset=utf-8');

  $nl = new Newsletter();
  echo $nl->get_all_email_addresses();
} 

$routes = [
  "get-all-emails" => "get_all_email_addresses"
];
$route_exists = array_search($path, $routes);
echo $route_exists;

// $active_route = ( $route_exists != false ) ? $routes[$route_exists] : "default_route";
// $active_route();

  