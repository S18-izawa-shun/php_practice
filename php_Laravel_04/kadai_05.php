<?php

/*
★　strip_tags
*/
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');
echo "\n";

/*
★　array_push
*/
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

/*
★　array_merge
*/

$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);
echo "\n";

/*
★　time, mktime
*/

echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
/*
★　mkime
*/

// デフォルトのタイムゾーンを設定します。
date_default_timezone_set('UTC') ."\n";

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) ."\n";

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006)) ."\n";
echo "\n";

/*
★　date
*/

$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);

print_r($tomorrow);
echo "\n";
echo $lastmonth ."\n";
echo $nextyear ."\n";
echo "\n";

echo date(DATE_RFC2822);
echo "\n";
