<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $sentence_1 = trim(fgets(STDIN)); // 入力値１
    $sentence_2 = trim(fgets(STDIN)); // 入力値２
    
    // 文字列の比較
    if( strcmp($sentence_1, $sentence_2) == 0 ){
        echo "YES";
    }else{
        echo "NO";
    }
?>
