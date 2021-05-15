<?php
    while ('' != $input_line = trim(fgets(STDIN))) {
        $tmp[] = (int)$input_line;
    };
    $count = array_shift($tmp); //n番の情報を避けておく
    $k = array_pop($tmp); //k円の情報を取得して配列から削除
    $key = array_keys($tmp, $k); //k円もってる人のindex番号を全てkey配列に格納する
    echo $key[0] + 1; //最初に見つかったindexに1足して出力
?>
