<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN)); // 入力値（カウント）
    $value = trim(fgets(STDIN)); // 入力値（カウント）
    $array = explode(",", $value); // 入力値を配列に格納
    
    // 結果の出力
    for($i = 0; $i < $count; $i++){
        echo $array[$i] . "\n";
    }
    
?>
