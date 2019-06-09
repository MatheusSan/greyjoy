<?php
$name = $_POST['name'];
$surname =$_POST['surname'];
$mobile = $_POST['mobile'];
$email =$_POST['email'];
$array = array($name, $surname, $mobile, $email);
// Loading existing data:
$json = file_get_contents("people.json");
$data = json_decode($json, true);

// Adding new data:

$data[sizeof($data) + 1] = $array;
// Writing modified data:
file_put_contents('people.json', json_encode($data, JSON_FORCE_OBJECT));
?>