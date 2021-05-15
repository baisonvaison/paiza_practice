<?php
    $n = trim(fgets(STDIN)); //データ総数を$nに格納
    for ($i = 0; $i < $n; $i++) {
        $a[] = trim(fgets(STDIN)); //データを配列$aに格納
    }
    function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    usort($a, "cmp");
    function output($item) { //出力用の関数を作って
        echo $item,"\n";
    }
    array_walk($a, 'output'); //array_walkを使って配列の全ての要素にoutput関数を適用させて出力する
?>
