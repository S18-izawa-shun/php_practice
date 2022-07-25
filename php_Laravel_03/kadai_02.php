<?php
// for文を使って、1から10000までの合計の値を表示してください
$start = 1;
$end = 10000;
$total = 0;

for($i = $start; $i <= $end; $i++){
    $total += $i;
}
echo $total;