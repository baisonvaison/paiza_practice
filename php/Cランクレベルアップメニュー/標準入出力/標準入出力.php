<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $num = trim(fgets(STDIN));
    
    for($i = 1; $i <= $num; $i++){
        $value = trim(fgets(STDIN));
        $value = explode(" ", $value);
        
        echo $value[0] . " " . ($value[1] + 1) . "\n";
    }

?>
