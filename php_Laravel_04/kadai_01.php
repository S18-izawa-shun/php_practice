<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

    // 引数の数値を2倍にして返す
function bai($bai) {/*　baiという関数で$baiという仮引数を設定　*/

    $bai *= 2;/*　$baiを2倍にして　*/
    return $bai;/*　$baiを返す　*/
}

echo bai(100);/*　引数に数値を設定（仮引数を代入）　*/
echo "\n";
