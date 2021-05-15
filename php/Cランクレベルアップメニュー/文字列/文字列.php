<?php
    while($input_line = trim(fgets(STDIN))){
        $tmp[] = $input_line;
    };
    
    array_shift($tmp); //Nのデータは不要なので消す
    
    while( $val = current( $tmp ) ) { //while〜nextを使ってみたかったので

        $data = explode(" ", $val); //半角スペースを区切り文字にexplodeで分割
        $time = explode(":", $data[0]); //時間データをコロンを区切り文字にexplodeで分割
        
        $time[1] = $time[1] + $data[2]; //分針データ分加算する
        
        if ($time[1] > 60) { //60分を超えてたら
            $time[0] = $time[0] + 1; //1時間加算して
            $time[1] = $time[1] - 60; //60分引く
        } 

        $time[0] = $time[0] + $data[1]; //時針データ分加算する
        
        if ($time[0] > 24) { //24時を超えてたら
            $time[0] = $time[0] - 24; //24時間引く
        }
        
        echo date("H:i", mktime($time[0],$time[1])),"\n"; //mktimeでUNIXタイムスタンプに変形→dateで整形して出力
        next( $tmp );
    }
?>
