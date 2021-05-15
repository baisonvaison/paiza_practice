<?php
    while($input_line = fgets(STDIN)){
        $tmp[] = $input_line;
    };
    $output = explode(" ", $tmp[1]);
    $i = 0;
    while($i < $tmp[0]){
        echo $output[$i]."\n";
        $i++;
    }
?>
