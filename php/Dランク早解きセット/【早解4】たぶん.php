<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 文字列を変数に代入
    $sentence = trim(fgets(STDIN));
    // 対象の文字列を置換
    $re_sentence = str_replace(", maybe.", "!!", $sentence);
    // 結果の出力
    echo $re_sentence;
?>
