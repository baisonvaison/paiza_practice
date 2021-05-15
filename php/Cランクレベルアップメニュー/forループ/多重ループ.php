<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $m = trim(fgets(STDIN)); //検索データの数を$mに格納
    for ($i = 0; $i < $m; $i++) {
         $c[] = trim(fgets(STDIN)); //検索データを配列$cに格納
    }
    $n = trim(fgets(STDIN)); //被検索データの数を$nに格納
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
         $S[] = trim(fgets(STDIN)); //被検索データを配列$Sに格納
    }
    for ($i = 0; $i < $m; $i++) {
         for ($j = 0; $j < $n; $j++) {
              echo (strpos($S[$j],$c[$i]) !== FALSE) ? "YES" : "NO","\n"; //検索データと被検索データを照合して出力
         }
    }
?>
