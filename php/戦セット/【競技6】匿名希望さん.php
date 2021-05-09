<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    $array = explode(" ", $value); // 入力値を配列に格納
    
    $first = substr($array[0], 0, 1); // 頭文字の取得（ファーストネーム）
    $second = substr($array[1], 0, 1); // 頭文字の取得（ラストネーム）
    
    echo $first . "." . $second . "."; // 結果の出力
?>
