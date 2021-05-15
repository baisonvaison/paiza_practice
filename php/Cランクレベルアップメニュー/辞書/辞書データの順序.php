<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    // 初めの繰り返し処理はダミー（必要なし）
    $count1 = trim(fgets(STDIN));
    
    for($i = 0; $i < $count1; $i++){
        
        $name = trim(fgets(STDIN));
	    $arr1[$i] = [$name, 0];
    }
    
    $count2 = trim(fgets(STDIN));
    
    for($i = 0; $i < $count2; $i++){
        
        $box2 = trim(fgets(STDIN));
        $array2 = explode(" ", $box2);
        $arr2[$i] = $array2;
    }

    $total = 0;
        
    for($i = 0; $i < $count1; $i++){
        for($j = 0; $j < $count2; $j++){
 
            if(strcmp($arr1[$i][0],$arr2[$j][0])==0 ){

                $arr1[$i][1] = $arr1[$i][1] + $arr2[$j][1];
                
             }
        }
    }
    
    asort($arr1);
    
    foreach($arr1 as $key => $value){
        
       echo $value[1] . "\n";
       
    }
?>
