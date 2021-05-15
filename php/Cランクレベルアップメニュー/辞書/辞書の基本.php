<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN));
    
    for($i = 0; $i < $count; $i++){
        
        $box = trim(fgets(STDIN));
        $array = explode(" ", $box);
        $arr[] = [$array[0], $array[1]];
    }
    
    $result = trim(fgets(STDIN));
    
    foreach($arr as $key => $value){
        if(strcmp($value[0],$result)==0 ){
            echo $value[1];
        }
    }
?>
