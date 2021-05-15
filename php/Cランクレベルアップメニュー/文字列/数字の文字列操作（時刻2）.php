<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_line = fgets(STDIN);
    
    $tmp = strtotime('+30 minute' , strtotime($input_line));
    $time2 = date('H:i',$tmp);
    print $time2;
?>
