<?php

function sum_arg($array, $oper)
{
    if (isset($array) && isset($oper)) {
        $result = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            switch ($oper) {
                case "+":
                    $result += $array[$i];
                    break;
                case "-";
                    $result -= $array[$i];
                    break;
                case "*":
                    $result *= $array[$i];
                    break;
                case "/":
                    if ($array[$i] == 0) {
                        echo "<p> Операция не может быть выполнена. Деление на 0 не возможно</p>";
                        return;
                    }
                    $result /= $array[$i];
                    break;
                case "%":
                    $result %= $array[$i];
                    break;
                default:
                    echo "<p> Не является арифметической операцией </p>";
                    return;
            }
        }
        echo "<p>Рез-т: $result </p>";
    }
}

$arr = array(mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10),12);
$arf = '/';

sum_arg($arr,$arf);