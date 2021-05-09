<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN));
    
    for($i = 0; $i < $count; $i++){
        
        // 入力値を変数に代入
        $str = trim(fgets(STDIN));
        
        // 条件に応じた結果の出力
        if(strcmp('forward', $str) == 0){
            echo "Sunny" . "\n";
        }elseif(strcmp('reverse', $str) == 0){
            echo "Rainy" . "\n";
        }elseif(strcmp('sideways', $str) == 0){
            echo "Cloudy" . "\n";
        }else{
        }
    }
?>
