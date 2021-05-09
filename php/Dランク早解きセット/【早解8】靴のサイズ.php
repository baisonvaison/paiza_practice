<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 入力値（靴のサイズ）
    $value = trim(fgets(STDIN));
    
    $US = $value - 18; // USサイズ
    $UK = $value - 18.5; // UKサイズ
    
    // 結果の出力(小数点も含める)
    echo number_format($US, 1) . " " . number_format($UK, 1);
?>
