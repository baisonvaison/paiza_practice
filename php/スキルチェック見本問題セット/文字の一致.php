<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 入力値を変数に代入
    $a = fgets(STDIN);
    $b = fgets(STDIN);
    
    // 入力値が同じの場合
    if(strcmp($a, $b) == 0){
        echo "OK";
    }else{
        echo "NG";
    }
?>
