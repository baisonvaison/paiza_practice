<?php

    $a = trim(fgets(STDIN)); //1行目の文字a
    $S = trim(fgets(STDIN)); //2行目の検索対象の文字列S
    
    if (!strstr($S, $a)) { //FALSEが返ってきた時にNO。それ以外はYES
        echo "NO";
    } else {
        echo "YES";
    }

?>
