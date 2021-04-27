<?php
// get url from request
// get endpoint
// get payload
// do the job
// return results

function test () {
  header("Access-Control-Allow-Headers: Content-Type, x-requested-with");
  header("Access-Control-Allow-Origin: http://localhost:8081");
  return json_encode(["some" => "test"]);
}

test();
