<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    
    // 条件に合わせた結果の出力
    if($value < 30 ){
        echo 'quiet';
    }elseif($value < 50){
        echo 'normal';
    }elseif($value < 70){
        echo 'noisy';
    }elseif(70 <= $value){
        echo 'very noisy';
    }else{
    }
?>

