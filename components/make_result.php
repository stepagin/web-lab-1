<?php
require("functions.php");
// Get the JSON contents
//$json = file_get_contents('php://input');

// decode the json data
//$data = json_decode($json, true);

//echo $json;
//echo "-----";
//echo gettype($data);
//echo $data["X"];
$result = hit_result();
echo $result;