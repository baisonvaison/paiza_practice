<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $money = trim(fgets(STDIN)); // 入力値
    $result = $money / 10; // 10円で買える個数の出力
    echo floor($result); // 小数点を除いた結果の出力
?>

