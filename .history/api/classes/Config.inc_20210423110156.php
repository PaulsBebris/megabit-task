<?php
$response_headers = [
  header("Access-Control-Request-Headers: Content-Type"),
  header("Access-Control-Allow-Headers: *"),
  header("Access-Control-Allow-Credentials: true"),
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS"),
  header("Access-Control-Allow-Origin: http://localhost:8081", false),
  header('Content-type: application/json; charset=utf-8')
];

echo $response_headers[0];
