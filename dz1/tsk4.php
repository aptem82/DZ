<?php

$age = mt_rand(1, 200);
if ($age >= 18 && $age <= 65) {
    echo "Вам $age и еще работать, и работать";
} elseif ($age > 65 && $age<=105) {
    echo "Вам $age и пора на пенсию";
} elseif ($age > 1 && $age <=17) {
    echo "Вам $age и ещё рано работать";
} else {
    echo "Неизвестный возраст";
}
