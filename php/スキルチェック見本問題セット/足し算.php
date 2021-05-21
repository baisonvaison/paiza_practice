<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN));// 入力値
    $array = explode(" ", $value); // 入力値を配列に格納

    // 値をint型に変換して変数に代入
    $a = intval($array[0]);
    $b = intval($array[1]);
    
    $sum = $a + $b; // 足し算
    
    echo $sum . "\n"; // 結果の出力
?>
