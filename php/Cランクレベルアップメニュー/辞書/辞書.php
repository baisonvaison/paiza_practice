<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $number = trim(fgets(STDIN));
    $arr_number = explode(" ", $number);
    
    // グループAの人数をカウント
    $a_count = $arr_number[0];

    // グループABの値を多次元配列に格納
    for($i = 0; $i < $a_count; $i++){
        $ab_number = trim(fgets(STDIN));
        $ab_arr = explode(" ", $ab_number);
        $ab_array[] = $ab_arr;
        $result_arr[$i] = [];
    }
       
    // グループBの人数をカウント
    $bc_count = $arr_number[1];

    // グループBCの値を多次元配列に格納
    for($i = 0; $i < $bc_count; $i++){
        $bc_number = trim(fgets(STDIN));
        $bc_arr = explode(" ", $bc_number);
        $bc_array[] = $bc_arr;
    }
    
    // グループACの値を多次元配列に格納
    for($i = 0; $i < $a_count; $i++){
        for($j = 0; $j < 2; $j++){
            for($k = 0; $k < $bc_count; $k++){
                
                // グループBの値が一致していた場合、多次元配列に格納
                if($ab_array[$i][1] == $bc_array[$k][0] ){
                    
                    $result_arr[$i] = [$ab_array[$i][0], $bc_array[$k][1]];
                    
                }
            }
 
        }
    }
    
    // 昇順に変更
    sort($result_arr);
    
    // 結果の出力
    for($i = 0; $i < $a_count; $i++){

        echo $result_arr[$i][0] . " " . $result_arr[$i][1] . "\n";
 
    }
?>
