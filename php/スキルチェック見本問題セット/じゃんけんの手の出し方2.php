<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    // グーが "G"、チョキが "C"、パーが "P"
    
    $value = trim(fgets(STDIN));
    $value_array = explode(" ", $value);
    
    $count = $value_array[0]; // じゃんけんを行う回数
    $total = $value_array[1]; // 指の本数の合計
    $result = 0; // 結果の初期値
    
    $zyanken = trim(fgets(STDIN)); // じゃんけんで相手が出す手
    $zyanken_array = str_split($zyanken); // 1文字ずつ配列に格納
    
    $zyanken_count_array = array_count_values($zyanken_array); // グーチョキパーの数を求める
    
    $c_count = $zyanken_count_array['C'] ?? 0; // チョキのカウント（グーを出す）
    $g_count = $zyanken_count_array['G'] ?? 0; // グーのカウント（パーを出す）
    $p_count = $zyanken_count_array['P'] ?? 0; // パーのカウント（チョキを出す）
    
    // ジャンケンの計算
    for($i = 0; $i <= $count; $i++){
        for($j = 0; $j <= $count; $j++){
            // チョキとグーで勝つパターン計算($iがチョキ、$jがパー)
            if( ((2 * $i) + (5 * $j)) == $total && ($count - ($i + $j)) >= 0 ){
               $result_array[] = [$i, $j];
            }
        }
    }
    
    // 各パターンの最大値（勝利数）を求める
    foreach( $result_array as $result){ 
        
        // $result[0]はチョキ、$result[1]はパー
        if( $p_count >= $result[0]  &&  $g_count >= $result[1] ){ // チョキとパーを全て満たす場合
        
            $win_array[] = $result[0] + $result[1] + min($c_count, $count - ($result[0] + $result[1]));
            
        }elseif( $p_count >= $result[0] && $result[1] > $g_count ){ // チョキのみを全て満たす場合
        
            $win_array[] = $result[0] + $g_count + min($c_count, $count - ($result[0] + $result[1]));
            
        }elseif( $g_count >= $result[1] && $result[0] > $p_count ){ // パーのみを全て満たす場合
        
            $win_array[] = $result[1] + $p_count + min($c_count, $count - ($result[0] + $result[1]));
            
        }elseif( $result[0] > $p_count && $result[1] > $g_count ){ // チョキとパーを満たさない場合
        
            $win_array[] = $g_count + $p_count + min($c_count, $count - ($result[0] + $result[1]));
            
        }
        
    }
    
    // 結果の出力
    echo max($win_array);
?>
