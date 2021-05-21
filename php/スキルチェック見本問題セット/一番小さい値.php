<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 入力値を配列に格納
    for($i = 1; $i <= 5; $i++){
       $array[] = trim(fgets(STDIN));
    }
    
    $result = min($array); // 最小値を変数に代入
    
    echo $result; // 結果の出力
?>
