<?php

    $count = trim(fgets(STDIN));
    $tmp = explode(" ", trim(fgets(STDIN)));
    
    for ($i = 0; $i < count($tmp); $i++) {
         $val = ($tmp[$i] % 3 == 0) ? 0 : 1; //TRUE(倍数だった時)は0、FALSEの時は1
         $count = $count - $val; //データ総数からFALSEだった数を引いていく
    }
    echo $count."\n";
?>
