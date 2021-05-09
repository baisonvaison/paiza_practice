<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN)); // 入力値
    $array = explode(" ", $value); // 入力値を配列に格納
    
    $result = $array[1] - $array[0]; // 気温差を求める
    
    // 結果の出力
    if($result > 0){
        echo "+" . $result;
    }else{
        echo $result;
    }
?>
