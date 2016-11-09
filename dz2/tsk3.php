<?php

function sumall()
{
    $arr = func_get_args();
    $oper = $arr[0];
    $prov = true;
    if (is_string($oper)) {
        for ($i = 1; $i < count($arr); $i++) {
            if (!is_numeric($arr[$i])) {
                $prov = false;
            }
        }
        if ($prov) {
            $result = $arr[1];
            for ($i = 2; $i < count($arr); $i++) {
                switch ($oper) {
                    case "+":
                        $result += $arr[$i];
                        break;
                    case "-":
                        $result -= $arr[$i];
                        break;
                    case "*":
                        $result *= $arr[$i];
                        break;
                    case "/":
                        if ($arr[$i] == 0) {
                            echo "<p> Err: Операция не может быть выполнена. Деление на 0 не возможно</p>";
                            return;
                        }
                        $result /= $arr[$i];
                        break;
                    case "%":
                        $result %= $arr[$i];
                        break;
                    default:
                        echo "<p>Err: Не является арифметической операцией  </p>";
                        return;
                }
            }
            echo "<p>Рез-т: $result </p>";
        } else {
            echo "<p>Err: Некорректный ввод. Данные содержат не только числа</p>";
        }
    } else {
        echo "Err: Некорректный ввод. Первый параметр не строка";
    }
}


sumall('+', 2.5, 9, 57);