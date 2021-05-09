<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    
    // 10回ループ
    for($i = 0; $i < 10; $i++){
        
       echo $value . "\n"; // 結果の出力
       
       $value = $value + 1; // 初期値に1を足す
       
       // $valueが10の場合0に戻す
       if($value == 10) {
           $value = 0;
       }
    }
    
?>

