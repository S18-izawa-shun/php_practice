<?php
$array = array(2,5,9,7,3,1,8,6,4);
// print_r($array);
foreach ($array as $value){
    echo $value;
    echo "\n";
}
// 配列を昇順（小さい順）にソートする
asort($array);
// print_rで表示する
print_r($array);
/*
foreach ($array as $value){
    echo $value;
    echo "\n";
}    
*/

