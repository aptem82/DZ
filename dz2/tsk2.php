<?php
//DODELKA
function sum_arg($array, $oper)
{
    if (isset($array) && isset($oper)) {
        $prov = true;
        foreach ($array as $val) {
            if (!is_numeric($val)) {
                $prov = false;
            }
        }
        if ($prov) {
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
                            echo "<p> Err: Операция не может быть выполнена. Деление на 0 не возможно</p>";
                            return;
                        }
                        $result /= $array[$i];
                        break;
                    case "%":
                        $result %= $array[$i];
                        break;
                    default:
                        echo "<p> Err: Не является арифметической операцией </p>";
                        return;
                }
            }
            echo "<p>Рез-т: $result </p>";
        } else {
            echo "Err: Некорректный ввод. Данные содержат не только числа";
        }
    }
}

$arr = array(mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10),апа);
$arf = '/';

sum_arg($arr, $arf);