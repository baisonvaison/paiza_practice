<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 図形の入力値
    $num = trim(fgets(STDIN));
    
    // 内角の総和を求める
    $total = 180 * ($num - 2);
    // 各内角の値を求める
    $single = floor($total / $num);
    
    echo $single; // 出力
    
?>
