<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $num = trim(fgets(STDIN));
    $num_list = explode(" ", $num);
    
    $total = 0;

    for($i = 0; $i < $num_list[0]; $i++){
        $num = trim(fgets(STDIN));
        $total = $total + $num * 10;
    }
    
    if($total % ($num_list[1] * 10) == 0){
        echo floor(($total /10) / $num_list[1]);
    }else{
        echo floor(($total /10) / $num_list[1]) + 1;
    }
?>
