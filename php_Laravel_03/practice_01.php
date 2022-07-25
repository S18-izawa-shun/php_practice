<?php
$height = 160;

if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if  ($height >=200){
    echo "200㎝ 以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます";
}
    
    