<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $str = trim(fgets(STDIN));
    // 曜日を配列に格納
    $days_arr = array('Monday', 'Tuesday', 'Wednesday', 'Thursday');
    // 条件に分けた結果の出力
    if( in_array($str, $days_arr) == true){
        echo 'Still' . ' ' . $str;
    }else{ // 金曜日の場合
        echo 'TGIF';
    }
?>
