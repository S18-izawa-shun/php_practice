<?php
$Y2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $Y2018_calendar["December"];


// 【応用】次のプログラムにはバグがあります。
// どこにバグが有るか調べて修正してみましょう(バグは一つとは限りません。)
// 
// $2018_calendar = {
//   "January" => "1月",
//   "February" => "2月"、
//   "March" => "3月",
//   "April" => "4月",
//   "May" => "5月",
//   "June" = "6月",
//   "July" => "7月",
//   "August" => "8月",
//   "September" => "9月",
//   "October" => 10月,
//   "November" => "11月",
//   "December" => "12月"
// };

// // 12月を表示する
// echo $2018_calendar[December];