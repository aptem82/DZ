<?php

$corr = 1;  //корректировка по UTC согласно часового пояса
$clt_time = $corr * 3600;
$rl_time = time() + $clt_time; //реальное время на стороне клиента
echo strftime('%d.%m.%Y %H:%M:%S <br>', $rl_time);
echo mktime (0,0,0,0,2,24,2016);