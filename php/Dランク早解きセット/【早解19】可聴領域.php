<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    
     // 条件に合わせた結果の出力
    if(20 <= $value && $value <=15000 ){
        echo 'yes';
    }elseif(15000 < $value && $value <=20000){
        echo 'not sure';
    }else{
        echo 'no';
    }
?>

