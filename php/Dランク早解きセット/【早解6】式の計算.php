<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    $array = explode(" ", $value); // 入力値を配列に格納

    $result = $array[0] + $array[2]; // 入力値を足す
    
    echo $result; // 結果の出力
?>
