<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN)); // 入力値(カウント)
    $array = []; // 空配列の作成
    
    for($i = 0; $i < $count; $i++){
        
        $str = trim(fgets(STDIN)); // 入力値を変数に代入
        
        // 配列に同じ入力値が既に存在してる場合
        if(in_array($str, $array) == true){
            echo "NO" . "\n"; // 結果の出力
        }else{ // 存在しない場合
            $array[] = $str; // 配列に入力値を代入（配列の書き方に注意）
            echo "YES" . "\n"; // 結果の出力
        }
    }
?>
