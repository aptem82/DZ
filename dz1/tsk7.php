<?php

echo "<table><tr>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++)
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "<td align='center'>(" . ($i * $j) . ")</td>";
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo "<td align='center'>[" . ($i * $j) . "]</td>";
        } else
            echo "<td align='center'>" . ($i * $j) . "</td>";
    if ($i != 10) echo "</tr><tr>";
}
echo "</tr></table>";
