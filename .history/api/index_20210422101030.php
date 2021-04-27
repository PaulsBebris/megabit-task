<?php
// get url from request
// get endpoint
// get payload
// do the job
// return results

function test () {
  header("Access-Control-Request-Headers: Content-Type");
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET");
  header("Access-Control-Allow-Origin: http://localhost:8081", false);
  return json_encode(["some" => "test"]);
}

test();
