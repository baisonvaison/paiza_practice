<?php
    $input_line = trim(fgets(STDIN));
    $h = $input_line[0].$input_line[1]; //0番目と1番目を$hに格納
    $m = $input_line[3].$input_line[4]; //3番目と4番目を$mに格納
    echo (int)$h,"\n",(int)$m; //数字が0Xの場合、0は出力しないようにするためint型に変換する
?>
