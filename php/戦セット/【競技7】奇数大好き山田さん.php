<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN)); // 入力値(カウント)
    
    for($i = 0; $i < $count; $i++){

        $value = trim(fgets(STDIN)); // 入力値を変数に代入
        
        // 入力値が奇数の場合
        if($value % 2 == 1){
             $array[] = $value; // 奇数を配列に格納
        }
    }
    
    sort($array); // 配列を昇順に並び替える
    $odd_count = count($array); // 配列の要素数をカウント

    // 結果の出力
    for($i = 0; $i < $odd_count; $i++){
        echo $array[$i] . "\n";
    }
?>
