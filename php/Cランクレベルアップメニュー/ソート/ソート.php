<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN));
    
    // 多次元配列に入力値を代入
    for($i = 0; $i < $count; $i++){
        
        $box = trim(fgets(STDIN));
        $arr = explode(" ", $box);
        $array[$i] = $arr;
        $value_arr[$i] = [];
        $result_arr[$i] = [];
    }
   
    // 多次元配列に格納されている金と銀を入れ替える（降順に並び替える為）
    for($i = 0; $i < $count; $i++){
        for($j = 0; $j < 2; $j++){
            $value_arr[$i] = [$array[$i][1], $array[$i][0]];
        }
    }
    
    rsort($value_arr); // 多次元配列を降順に並び替える
    
    // 金と銀の位置を元に戻す
    for($i = 0; $i < $count; $i++){
        for($j = 0; $j < 2; $j++){
            $result_arr[$i] = [$value_arr[$i][1], $value_arr[$i][0]];
        }
    }
    
    // 結果の出力
    for($i = 0; $i < $count; $i++){
        echo $result_arr[$i][0] . " " . $result_arr[$i][1] . "\n";
    }
?>


