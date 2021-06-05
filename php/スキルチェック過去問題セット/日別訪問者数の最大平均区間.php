<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $value = trim(fgets(STDIN));
    $value_array = explode(" ", $value);
    
    $access_count = $value_array[0]; // アクセスログカウント
    $campaign_count = $value_array[1]; // キャンペーンの日数
    
    $num = trim(fgets(STDIN));
    $num_array = explode(" ", $num); // 各日にちの訪問者数
    
    $result = 0; // 結果の初期化
    
    // 結果の計算
    for($i = 0; $i < ($access_count - $campaign_count) + 1; $i++){
        
        // キャンペーンの日数分の値を求める
        for($j = $i; $j < $i + $campaign_count; $j++){
            $result = $result + $num_array[$j];
        }
        
        // 平均訪問者数を配列に格納
        $result_array[] = $result;
        $result = 0; // 結果の初期化
    }
    
    $max_num = max($result_array); // 最大値を求める
    $max_count = 0; // 最大値カウントの初期値
    
    // 配列に格納されている最大値の数を求める
    for($i = 0; $i < count($result_array); $i++){
        if($max_num == $result_array[$i]){
            $max_count = $max_count + 1;
        }
    }
    
    $max_key = array_search($max_num, $result_array); // 最大値のキーを取得
    
    // 結果の出力
    echo $max_count.' '.($max_key + 1);
    
?>
