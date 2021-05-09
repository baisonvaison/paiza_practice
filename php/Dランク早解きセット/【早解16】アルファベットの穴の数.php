<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $str = trim(fgets(STDIN)); // 入力値
    
    // 0の出力
    $zero_arr = array('C', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    // 1の出力
    $one_arr = array('A', 'D', 'O', 'P', 'Q', 'R');
    // 2の出力
    $two_arr = array('B');
    
    // 条件に分けた結果の出力
    if( in_array($str, $zero_arr) == true){
        echo '0';
    }elseif(in_array($str, $one_arr) == true){
        echo '1';
    }elseif(in_array($str, $two_arr) == true){
        echo '2';
    }else{
    }
?>

