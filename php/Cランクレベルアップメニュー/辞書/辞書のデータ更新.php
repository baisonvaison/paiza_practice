<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 初めの繰り返し処理はダミー（必要なし）
    $count1 = trim(fgets(STDIN));
    
    for($i = 0; $i < $count1; $i++){
        
        $name = trim(fgets(STDIN));
	    $arr1[] = $name;
       
    }
    
    $count2 = trim(fgets(STDIN));
    
    for($i = 0; $i < $count2; $i++){
        
        $box2 = trim(fgets(STDIN));
        $array2 = explode(" ", $box2);
	    $arr[] = [$array2[0], $array2[1]];
       
    }
    
    $result = trim(fgets(STDIN));
    
    $total = 0;

    for($i = 0; $i < $count2; $i++){
        if(strcmp($result,$arr[$i][0])==0 ){
            $total = $total + $arr[$i][1];
        }
    }

    echo $total;
    
?>
