<?php
/*
$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
を渡すとその要素をすべてかけた結果を返す関数を作成してください
(解は「945」)
*/


function mul($arr){
    $ret = 1;
    foreach($arr as $n){
        $ret = $ret * $n;
    }
    return $ret;
}

echo mul(array(1,3,5,7,9));
echo "\n";
