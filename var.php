<?php
// Variables
$desired_day   = 20; // День дэдлайна
$desired_month = 11; // Месяц дэдлайна
$desired_year  = 2019; // Год дэдлайна

$current_day   = date('d'); // Нынешний день
$current_month = date('m'); // Нынешний месяц
$current_year  = date('Y'); // Нынешний год

$day_left      = $desired_day     - $current_day; // Осталось дней
$month_left    = $desired_month   - $current_month; // Осталось месяцев
$year_left     = $desired_year    - $current_year; // Осталось лет
