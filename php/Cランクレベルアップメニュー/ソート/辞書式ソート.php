<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN));
    
    for($i = 0; $i < $count; $i++){
        $box = trim(fgets(STDIN));
        $array = explode(" ", $box);
        $arr[] = [$array[0], $array[1]];
    }

    rsort($arr);
    
    foreach($arr as $key => $value){
       echo $value[0] . " " . $value[1] . "\n";
    }
?>

