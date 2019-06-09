<?php 
    $strJsonFileContents = file_get_contents("analise.json");
    // Convert to array 
    $json = json_decode($strJsonFileContents, true);

function search($array, $index, $campo){
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
    }
}

$msgJson = file_get_contents("msg.json");
$msg = json_decode($msgJson, true);



function countStatus($msg, $json, $status){
    echo($status."<br>");
    //$status = search($json, 'status', $status);
    $num = count($msg);
    $j =0;
    for($i=0; $i<$num; $i++){
        $array_msg = explode(",",$msg[$i]);
        echo '<pre>';
        var_dump($array_msg);
        foreach($array_msg as $obj){
            echo "$status - $obj <br>";
            if($obj==$status){
                $j++;
            }
        }
    }
    return $j;
}
    
echo(countStatus($msg, $json, 'parada'));

?>