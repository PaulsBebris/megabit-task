<?php
// get url from request
// get endpoint
// get payload
// do the job
// return results

function test () {
  header("Access-Control-Allow-Headers: *");
  header("Access-Control-Allow-Origin: *");
  return json_encode(["some" => "test"]);
}

test();
