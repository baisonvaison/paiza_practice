<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $n = trim(fgets(STDIN));
    $knum = strlen($n); //桁数を取得
    switch ($knum) {
        case '3':
            echo $n;
            break;
        case '2':
            echo "0"."$n";
            break;
        case '1':
            echo "00"."$n";
            break;
        default:
            //何も設定しない
            break;
    }
?>
