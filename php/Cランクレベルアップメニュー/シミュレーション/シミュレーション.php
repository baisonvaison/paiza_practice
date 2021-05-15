<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

   // paiza体力
   $energy = trim(fgets(STDIN));
   
   $count = 0; // モンスターの攻撃回数カウント
   
   $paiza_arr = []; // paizaがmonsterから受けたダメージを配列に格納
   $monster_arr = []; // monsterがpaiza受けたダメージを配列に格納
 
   // 1,2回目の攻撃
   for($i = 0; $i <= 1; $i++){
               
        $count = $count + 1; // 攻撃回数のカウント
       
        $paiza_attack = 1; // paizaの攻撃値
        $monster_attack = 1; // monsterの攻撃値
         
        // paiza残りの体力
        $energy = $energy - $monster_attack;
       
        // paizaの体力が0以下の場合
        if($energy <= 0){
            break;
        }else{
            // ダメージを配列に格納
            $paiza_arr[$i] = 1; 
            // ダメージを配列に格納
            $monster_arr[$i] = 1;
        }
    }
   
   // 攻撃カウントが2以上の場合
   if($count >= 2){
   
        for($i = 2; $i <= 1000000; $i++){
    
            // paizaのカウンターアタック
            $paiza_counter = $paiza_arr[$i - 1] + $paiza_arr[$i - 2];
    
            // monsterのカウンターアタック
            $monster_counter = ($monster_arr[$i - 1] * 2) + $monster_arr[$i - 2];
    
            // paiza残りの体力
            $energy = $energy - $monster_counter;
            // 攻撃回数のカウント
            $count = $count + 1;
    
            // paizaの体力が0以下の場合
            if($energy <= 0){
                break;
            }else{
                // paizaのダメージを配列に格納
                $paiza_arr[$i] = $monster_counter; 
                // monsterのダメージを配列に格納
                $monster_arr[$i] = $paiza_counter;
            }
    
        }
   
   }
  
  // 攻撃回数の出力
  echo $count;
   
?>
