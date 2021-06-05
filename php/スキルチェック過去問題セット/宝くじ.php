<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $winning_number = trim(fgets(STDIN)); // 当選番号
    $count = trim(fgets(STDIN)); // 宝くじの枚数
    
    $second_prize_number = substr($winning_number, -4); // 2等の当選番号
    $third_prize_number = substr($winning_number, -3); // 3等の当選番号
    
    // 購入した宝くじを配列に格納
    for($i = 0; $i < $count; $i++){
        
        $array[$i] = trim(fgets(STDIN)); // 入力値（宝くじの番号）
        
        $lottery_second = substr($array[$i], -4); // 宝くじの下４桁（二等）
        $lottery_third = substr($array[$i], -3); // 宝くじの下３桁（三等）

        // 結果の出力
        if($array[$i] == $winning_number){
            echo 'first' . "\n"; // 一等
        }elseif($array[$i] + 1 == $winning_number || $array[$i] - 1 == $winning_number){
            echo 'adjacent' . "\n"; // 前後賞
        }elseif($lottery_second == $second_prize_number){
            echo 'second' . "\n"; // 二等
        }elseif($lottery_third == $third_prize_number){
            echo 'third' . "\n"; // 三等
        }else{
            echo 'blank' . "\n"; // ハズレ
        }
        
    }
    
?>
