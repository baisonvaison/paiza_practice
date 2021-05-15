<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN));
        
    $box = trim(fgets(STDIN));
    $array = explode(" ", $box);
    
    $paiza_score = 1;
    $kirishima_score = 1;
    $count = 1;
    
    for($i = 0; $i < 1000000; $i++){
        
        // kirishimaに渡す値を算出
        $kirishima = $paiza_score * $array[0] ; // $array[0]はpaizaの引数
        
        // kirishimaの得点
        $kirishima_score = $kirishima_score + $kirishima;
        
        if($value < $kirishima_score){
            break;
        }
    
        // paizaに渡す値を算出
        $paiza = $kirishima_score % $array[1]; // $array[1]はkirishimaの引数
    
        // paizaの得点
        $paiza_score =  $paiza_score + $paiza;
    
        // kirishimaに渡す値を算出
        $kirishima = $paiza_score * $array[0] ; 

        $count = $count + 1;
        
    }
    
    echo $count;
    
?>
