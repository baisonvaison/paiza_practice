<?php

    $n = trim(fgets(STDIN)); //データ総数を$nに格納
    for ($i = 0; $i < $n; $i++) {
        $a[] = trim(fgets(STDIN)); //データを配列$aに格納
    }
    
    function bubble_sort(&$array){
        $size = count($array);
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < ($size - 1 - $i); $j++) {
                if ($array[$j + 1] > $array[$j]) {
                    $tmp = $array[$j + 1];
                    $array[$j + 1] = $array[$j];
                    $array[$j] = $tmp; 
                }                      
            }
        }
    }
    bubble_sort($a); //rsortで降順にソートして
    function output($item) { //出力用の関数を作って
        echo $item,"\n";
    }
    array_walk($a, 'output'); //array_walkを使って配列の全ての要素にoutput関数を適用させて出力する
?>
