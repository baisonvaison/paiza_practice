<?php
    $count = fgets(STDIN);

    $val = "NO"; //defaultでNOを入れておく

    for ($i = 0; $i < $count; $i++) {
         if ((int)fgets(STDIN) - 7 == 0) { //7があったらYESを入れてループを抜ける
             $val = "YES";
             break;
         }
    }
    echo $val;
?>
