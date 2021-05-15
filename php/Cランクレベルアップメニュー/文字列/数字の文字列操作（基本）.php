<?php
    $input_line = trim(fgets(STDIN));
    $tmp = preg_split('//',"$input_line", -1, PREG_SPLIT_NO_EMPTY); //1文字ずつ分解して配列に格納する
    $one = $tmp[0] + $tmp[3]; //0,3番目の数値を合計する
    $two = $tmp[1] + $tmp[2]; //1,2番目の数値を合計する
    echo "$one"."$two"."\n"; //統合値と末尾を文字列として結合し、数値として出力する
?>
