<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $num = trim(fgets(STDIN));
    $num_list = explode(" ", $num);
    
    $command_types = $num_list[0];
    $param_length = $num_list[1];
    $time_series = $num_list[2];
    
    // コマンドの種類数を配列に格納
    for($i = 0; $i < $command_types; $i++){
        
        $num = trim(fgets(STDIN));
        $num_list = explode(" ", $num);
        
        for($j = 0; $j < $param_length; $j++){
            $command_types_list[$i][] = $num_list[$j];
        }

    }
    
    // パラメーター列の時系列を配列に格納
    for($i = 0; $i < $time_series; $i++){
        
        $num = trim(fgets(STDIN));
        $num_list = explode(" ", $num);
        
        for($j = 0; $j < $param_length; $j++){
            $param_list[$i][] = $num_list[$j];
        }

    }
    
    // 各パラメーターの差分を配列に格納
    for($i = 0; $i < $time_series - 1; $i++){
        for($j = 0; $j < $param_length; $j++){
            $result_list[$i][] = $param_list[$i+1][$j] - $param_list[$i][$j];
        }
    }
    
     // 各パラメーターの差分を配列に格納
    for($i = 0; $i < $time_series - 1; $i++){
        for($j = 0; $j < $command_types; $j++){
            if($command_types_list[$j] == $result_list[$i]){
                echo $j + 1;
                echo "\n";
                break;
            }
        }
    }   
?>
