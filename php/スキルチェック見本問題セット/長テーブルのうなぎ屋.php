<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN));
    $value_array = explode(" ", $value);
    
    $seat_count = $value_array[0]; // 座席数
    $count = $value_array[1]; // カウント
    
    // 来客情報を変数に格納
    for($i = 0; $i < $count; $i++){
        $customer = trim(fgets(STDIN));
        $customer_array = explode(" ", $customer);
        
        $shop_array[] = [$customer_array[0], $customer_array[1]];
    }
    
    $result = []; // 配列の生成
    $cnt = 0; // カウントの初期値
    
    // 着席出来ている人数を計算
    for($i = 0; $i < $count; $i++){

       for($j = $shop_array[$i][1]; $j < $shop_array[$i][0] + $shop_array[$i][1]; $j++){
           // 誰も座っていなかった場合、カウントを追加
           if(!in_array($j,$result)){
                // 座席数を超えていた場合の条件分岐
                if($j > $seat_count && in_array($seat_count - $j,$result)){
                    continue;
                }else{
                    $cnt = $cnt + 1;
                }
           }
        }
        
        // 全員席につけていた場合、配列に席番号を格納
        if($cnt == $shop_array[$i][0]){
            for($k = $shop_array[$i][1]; $k < $shop_array[$i][0] + $shop_array[$i][1]; $k++){
                $result[] = $k;
            }
        }  
        $cnt = 0; // カウントを初期化
    }
    
    // 結果の出力
    echo count($result);
    
?>
