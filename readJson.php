<?php 
    $strJsonFileContents = file_get_contents("people.json");
    // Convert to array 
    $array = json_decode($strJsonFileContents, true);
    var_dump($array); // print array
?>