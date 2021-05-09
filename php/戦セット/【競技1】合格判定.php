<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    
    // 条件に応じた結果の出力
    if($value >= 80){
        echo "pass";
    }else{
        echo "fail";
    }
?>
