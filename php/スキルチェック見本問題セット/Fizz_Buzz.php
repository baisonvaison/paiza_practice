<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $count = trim(fgets(STDIN)); // 入力値
    
    // 結果の出力
    for ($i = 1; $i <= $count; $i++) {
        
    	if ($i % 15 == 0){ // 15で割り切れる場合
        	echo "Fizz Buzz" . "\n";
    	}elseif ($i % 3 == 0){ // 3で割り切れる場合
        	echo "Fizz" . "\n";
    	}elseif ($i % 5 == 0){ // 5で割り切れる場合
        	echo "Buzz" . "\n";
    	}else{
        	echo $i . "\n"; // それ以外の場合
    	}
    }
?>
