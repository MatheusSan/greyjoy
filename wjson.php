<?php
$array = $_POST['msg'];

// Loading existing data:
$json = file_get_contents("msg.json");
$data = json_decode($json, true);

// Adding new data:

$data[sizeof($data) + 1] = $array;
// Writing modified data:
file_put_contents('msg.json', json_encode($data, JSON_FORCE_OBJECT));
?>