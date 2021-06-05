<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    $array = explode(" ", $value); // 入力値を配列に格納
    
    $array_checked = array_count_values($array); // 配列の値の重複をチェック
    
    $count = count($array_checked); // 配列の要素数をカウント
    
    // 結果の出力（連想配列）
    foreach($array_checked as $key => $value){
        echo $key . " " . $value . "\n";
    }
?>
