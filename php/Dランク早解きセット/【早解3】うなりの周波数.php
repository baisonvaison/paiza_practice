<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    
    $number = trim(fgets(STDIN)); // 入力値
    $array = explode(" ", $number); // 入力値を配列に格納
    
    // 初めの入力値が２つ目の値より大きい数の場合
    if($array[0] >= $array[1]){
        $result = $array[0] - $array[1];
        echo $result;
    // ２つ目の入力値が初めの値より大きい数の場合
    }elseif($array[1] >= $array[0]){
        $result = $array[1] - $array[0];
        echo $result;
    }else{
    }
?>
