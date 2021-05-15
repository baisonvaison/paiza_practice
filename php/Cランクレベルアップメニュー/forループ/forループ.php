<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $NMK = explode(" ", fgets(STDIN)); //N[0],M[1],K[2]のデータを配列に格納する
    for ($i = 0; $i < $NMK[0]; $i++) { //N人分のデータを処理する
        $num = explode(" ", fgets(STDIN));
        $score = 0; //得点スコアを0にセット
        for ($j = 0; $j < $NMK[1]; $j++) {  //M個分の数値を処理する
             if (trim($num[$j]) == trim($NMK[2])) {
                $score++; //Kがあったらスコアに1加算
             }
        }
        echo $score,"\n"; //計算し終わったスコアを出力
    }
?>
