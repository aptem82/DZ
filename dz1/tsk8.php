<?php

$str = "PHP – это широко используемый язык сценариев общего назначения с открытым исходным кодом.";
echo "$str <br>";
$arr = explode(' ', $str);
echo "<pre>\n";
print_r($arr);
$revers = array();
$dl = count($arr);
$i = 0;
while ($i<count($arr)) {
    $j=count($arr)-++$i;
    $revers[$i] = "$arr[$j]";
};
echo "<pre>\n";
print_r($revers);
$str = join('_',$revers);
echo $str;
