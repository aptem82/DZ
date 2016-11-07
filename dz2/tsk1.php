<?php

function _strok($array, $pr = false)
{
    if ($pr != 'true') {
        for ($i = 0; $i <= count($array); $i++) {
            echo "<p> $array[$i] </p>";
        }
    } else {
        $str = implode(" ", $array);
        return $str;
    }
}

$str = "PHP – это широко используемый язык сценариев общего назначения с открытым исходным кодом.";
$arr = explode(' ', $str);
echo _strok($arr, true);