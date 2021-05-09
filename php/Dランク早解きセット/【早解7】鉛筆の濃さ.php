<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $array = ['6B', '5B', '4B', '3B', '2B', 'B', 'HB', 'F', 'H', '2H', '3H', '4H', '5H', '6H', '7H', '8H', '9H'];
    
    $i = trim(fgets(STDIN)); // 入力値（順番）を変数に代入
    
    $result = $array[$i -1]; // インデックスから１を引く

    echo $result; // 結果の出力
?>
