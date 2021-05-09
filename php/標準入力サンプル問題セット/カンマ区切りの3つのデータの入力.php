<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN));
    $array = explode(",", $value); // 入力値を配列に格納
    
    $count = count($array); // 配列の要素数をカウント
    
    // 結果の出力
    for($i = 0; $i < $count; $i++){
        echo $array[$i] . "\n";
    }
    
?>
