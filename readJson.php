<?php 
    $strJsonFileContents = file_get_contents("analise.json");
    // Convert to array 
    $array = json_decode($strJsonFileContents, true);
    

    foreach ($array as $key => $value) {
        foreach($value as $data => $item){
            foreach($item as $info){
                echo "<pre>";
                
                if($info == "parada"){
                    break;
                }
                echo ($info);
            }

        }
        //print_r($array);
    }
?>