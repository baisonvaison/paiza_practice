<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN)); // 入力値（カウント）
    
    for($i = 0; $i < $count; $i++){
        $value = trim(fgets(STDIN)); // 入力値を変数に代入
        $array[] = $value; // 変数を配列に格納
        
    }
    
    $reverse_array = array_reverse($array); // 配列をリバートにする
    $unique_array = array_unique($reverse_array); // 重複を削除
    $count_new = count($unique_array); // 重複削除した配列の要素数をカウント
    
    // 結果の出力
    for($i = 0; $i < $count_new; $i++){
        echo $unique_array[$i] . "\n";
    }
    
?>
