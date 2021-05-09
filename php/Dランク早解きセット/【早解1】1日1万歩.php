<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $value = trim(fgets(STDIN));
    $array = explode(" ", $value);
  
    // 歩いた距離をセンチに変更
    $walk_distance = $array[0] * 100000; 
    
    // 歩幅に1万歩をかける
    $target_distance = $array[1] * 10000; 

    // 1万歩以上歩いていた場合
    if($walk_distance >= $target_distance){
        echo "yes";
    }else{
        echo "no";
    }
?>
