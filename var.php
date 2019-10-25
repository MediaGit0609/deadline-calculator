<?php
// Variables
$desired_day   = 20;
$desired_month = 11;
$desired_year  = 2019;

$current_day   = date('d');
$current_month = date('m');
$current_year  = date('Y');

$day_left      = $desired_day     - $current_day;
$month_left    = $desired_month   - $current_month;
$year_left     = $desired_year    - $current_year;
