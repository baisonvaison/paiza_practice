<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    
    // 条件に応じた結果の出力
    if(0 <= $value && $value <= 5){
        echo "raw";
    }elseif(6 <= $value && $value <= 7){
        echo "soft boiled";
    }elseif(8 <= $value && $value <= 15){
        echo "hard boiled";
    }
?>
