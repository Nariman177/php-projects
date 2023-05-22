<?php
  // колво  секунд в сутках.
  $seconds_in_day = strtotime('tomorrow') - strtotime('today');
  echo $seconds_in_day; // 86400

  // количество секунд в 30 сутках
   $seconds_in_30_days = strtotime('+30 days') - strtotime('now');
   echo $seconds_in_30_days; // 2592000

  //количество секунд в году.
  // $seconds_in_year = 365 * 24 * 60 * 60;
  // echo $seconds_in_year; // 31536000

  //количество минут в сутках.
  // $minutes_in_day = 60 * 24;
  // echo $minutes_in_day; // 1440

  // определяем количество минут в году
// $minutes_in_day = 60 * 24;
// $minutes_in_year = $minutes_in_day * 365;
// $minutes_in_leap_year = $minutes_in_day * 366;
// $current_year = date('Y');
// $is_leap_year = ($current_year % 4 == 0 && $current_year % 100 != 0) || $current_year % 400 == 0;
// if ($is_leap_year) {
//     echo "Количество минут в високосном году ($current_year): " . $minutes_in_leap_year;
// } else {
//     echo "Количество минут в обычном году ($current_year): " . $minutes_in_year;
// }

// Найдите количество байт в мегабайте.
// $bytesInMb = 1024 * 1024; // 1048576
// echo "В одном мегабайте $bytesInMb байт.";

//Найдите количество байт в гигабайте.
//$bytesInGb = 1024 * 1024 * 1024; // 1073741824
//echo "В одном гигабайте $bytesInGb байт.";

//Найдите количество байт в 10 гигабайтах.
//$bytesInGb = 1024 * 1024 * 1024; // 1073741824
//$bytesIn10Gb = $bytesInGb * 10; // 10737418240
//echo "В 10 гигабайтах $bytesIn10Gb байт.";

//Найдите количество байт в терабайте.
//$bytesInTb = 1024 * 1024 * 1024 * 1024; // 1099511627776
//echo "В одном терабайте $bytesInTb байт.";

//Найдите количество килобайт в терабайте.
//$kilobytesInTb = 1024 * 1024 * 1024; // 1073741824
//echo "В одном терабайте $kilobytesInTb килобайт.";




?>
