<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN)); // 入力値（カウント）
    
    for($i = 0; $i < $count; $i++){
        
        // 入力値（ストライク、ボール）を配列に格納
        $array[$i] = trim(fgets(STDIN)); 
        
        // 特定の配列値をカウント
        $count_array = array_count_values($array);
        
        // 配列にストライクがあった場合
        if(!empty($count_array['strike'])){
            
            // ストライクが３つの場合
            if($count_array['strike'] == 3){
                echo "out!";
                break;
            }
        
        }
        
        // 配列にボールがあった場合
        if(!empty($count_array['ball'])){
            // ボールが４つの場合
            if($count_array['ball'] == 4){
                echo "fourball!";
                break;
            }
        }
        
        // 入力値の出力
        echo $array[$i] . "!" . "\n";
    }
    
?>
