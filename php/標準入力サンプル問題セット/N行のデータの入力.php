<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN)); // 入力値（出力する回数）
    
    // 結果の出力
    for($i = 1; $i <= $count; $i++){
        $value = trim(fgets(STDIN)); // 入力値（出力値）
        echo $value . "\n";
    }
    
?>

