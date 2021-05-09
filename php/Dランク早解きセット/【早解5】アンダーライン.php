<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 文字列を変数に代入
    $sentence = trim(fgets(STDIN));
    
    // 文字数のカウント
    $str_count = mb_strlen($sentence);
    
    // 文字列の出力
    echo $sentence . "\n";
    
    // ^の出力
    for($i = 1; $i <= $str_count; $i++){
        echo "^";
    }
?>
