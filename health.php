<?php


// set header application/json
header('Content-Type: application/json');
// set status code
http_response_code(200);

$response = [
  "status" => "success",
  "message" => "Server is healthy",
  "code" => 200,
  "port" => $_SERVER['SERVER_PORT']
];


echo json_encode($response);