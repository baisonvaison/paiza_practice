<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    
    $value = trim(fgets(STDIN));
    $value_array = explode(" ", $value);
    
    $length_count = $value_array[0]; // 縦の数
    $width_count= $value_array[1]; // 横の数
    
    // 図形の構成を配列に代入
    for($i = 0; $i < $length_count; $i++){
        $str_array = str_split(trim(fgets(STDIN)));
        for($j = 0; $j < $width_count; $j++){
            $diagram_array[$i][] = $str_array[$j];
        }
    }
    
    // 線対称(line symmetry)の検証
    for($i = 0; $i < $length_count; $i++){
        for($j = 0; $j < $width_count; $j++){
            // 縦幅の線対象を検証
            if(floor($length_count/2) > $i && strcmp($diagram_array[$i][$j], $diagram_array[($length_count-1) - $i][$j]) !== 0 ){
                $line_height_symmetry = 'not line_symmetry';
            }
            // 横幅の線対象を検証
            if(floor($width_count/2) > $j && strcmp($diagram_array[$i][$j], $diagram_array[$i][($width_count-1) - $j]) !== 0){
                $line_width_symmetry = 'not line_symmetry';
            }
            // 点対象を検証
            if(strcmp($diagram_array[$i][$j], $diagram_array[($length_count-1) - $i][($width_count-1) - $j]) !== 0 ){
                $point_symmetry = 'not line point symmetry';
            }
        }
    }

    // 結果の出力
    if(!empty($line_height_symmetry) && !empty($line_width_symmetry) && !empty($point_symmetry)){
        echo 'none';
    }elseif(empty($line_height_symmetry) && empty($line_width_symmetry) && empty($point_symmetry)){
        echo 'line point symmetry';
    }elseif((empty($line_height_symmetry) || empty($line_width_symmetry)) && !empty($point_symmetry)){
        echo 'line symmetry';
    }elseif(empty($point_symmetry)){
        echo 'point symmetry';
    }else{
    }
    
?>
