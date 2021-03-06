<?php
spl_autoload_register('loadClasses');
function loadClasses ($class_name) {
  $path = __DIR__ . "/classes/";
  $extenssion = ".class.php";
  $full_path = $path . $class_name . $extenssion;
  include $full_path;
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  header("Access-Control-Allow-Origin: http://localhost:8081", false);
  header("Access-Control-Request-Headers: Content-Type");
  header("Access-Control-Allow-Headers: *");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header('Content-type: text/html; charset=utf-8');
} else {
  function sendResponse () {
    header("Access-Control-Request-Headers: Content-Type");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Origin: http://localhost:8081", false);
    header('Content-type: text/html; charset=utf-8');

    $endpoints = [
      "save-email" => "saveEmail",
      "get-emails" => "getEmails"
    ];
    
    // get url from request
    $path = substr( parse_url(  $_SERVER['REQUEST_URI'], PHP_URL_PATH ), 1 );
    // get paylod in case of POST
    $payload = json_decode( file_get_contents("php://input" ) );
    // do the job
    $newsletter = new Newsletter();
    // map route to method
    $newsletterMethod = array_key_exists($path, $endpoints) ? $endpoints[$path] : "default";
    $serverResponse = $newsletter -> $newsletterMethod($payload);
    echo $serverResponse;
  }
  
  sendResponse();

}


  