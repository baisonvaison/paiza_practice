<?php
    /* 改行や空白のみの場合は終了 */
    while ('' != $input_line = trim(fgets(STDIN))) {
        $tmp[] = (int)$input_line;
    };
    for ($i = 1; $i <= $tmp[0]; $i++){
        echo mb_strlen($tmp[$i])."\n";
    }
?>
