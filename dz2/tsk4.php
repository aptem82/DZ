<?php

function tab($p1, $p2)
{
       if (!isset($p1) || !isset($p2) || (!isset($p1) && !isset($p2))) {
        echo "Err: некорректно введены параметры";
        return;
    }
    if (is_int($p1) && is_int($p2)) {
        echo "<table border='2'>";
        for ($i = 1; $i <= $p2; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $p1; $j++) {
                if ($j == 1) {
                    echo "<td>" . $i * $j . "</td>";
                } elseif ($i == 1) {
                    echo "<td>" . $i * $j . "</td>";
                } else {
                    echo "<td>" . $i * $j . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Err: Не целочисленные параметры";
        return;
    }
}

tab(2);