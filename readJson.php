<?php 
    $strJsonFileContents = file_get_contents("analise.json");
    // Convert to array 
    $array = json_decode($strJsonFileContents, true);
    echo (search($array, 'status','obras'));
    
function search($array, $index,$campo){
    foreach ($array as $key => $value) {
        foreach($value as $data => $item){
            if($data == $index){
                foreach($item as $info){
                    if($info == $campo){
                        return $info;
                    }
                  
                    
            }               
        }

        }
        //print_r($array);
    }
}
    
?>