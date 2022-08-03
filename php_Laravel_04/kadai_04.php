<?php
/*
4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す
max_array という関数を実装しようとしています。
途中の部分を完成させてください

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }
 return $max_number;
 }
 */
 
 function max_array($arr){
   // とりあえず配列の最初の要素を一番大きい値とする
   $max_number = $arr[0];
   foreach($arr as $a){
       if ($max_number < $a) {
        $max_number = $a;   
       }
   //どうしたらいいかわからない・・・・
      
   }
   return $max_number;
 }
   
 echo max_array(array(2,9,4,6,13,5,7,1));
 echo "\n";
