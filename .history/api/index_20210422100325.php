<?php
// get url from request
// get endpoint
// get payload
// do the job
// return results

function test () {
  header("Access-Control-Allow-Headers: Origin, Accept, Content-Type, x-requested-with");
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Origin: http://localhost:8081");
  return json_encode(["some" => "test"]);
}

test();
