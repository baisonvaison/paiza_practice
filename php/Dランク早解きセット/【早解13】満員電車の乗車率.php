<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $num = trim(fgets(STDIN)); // 入力値
    $percent = ($num / 140) * 100; // 乗車率
    echo floor($percent) . "%"; // 結果の出力
?>
