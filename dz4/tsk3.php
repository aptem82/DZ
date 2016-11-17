<?php

$arr = array();
for ($i = 0; $i < 50; $i++) {
    $arr[$i] = mt_rand(0, 100);
}
echo "<pre>";
print_r($arr);
$file = fopen('file.csv', 'w');
fputcsv($file, $arr);
fclose($file);
$csvArray = array();
$csv_file = fopen("file.csv", "r");
while (!feof($csv_file)) {
    $a[] = fgetcsv($csv_file, 1024, ";");
}
$csvPath = 'file.csv';
$csv_file = fopen($csvPath, "r");
if ($csv_file) {
    $res = array();
    while (($csvData = fgetcsv($csv_file, 1024, ",")) !== FALSE) {
        $res[] = $csvData;
    }
}
$sum = 0;
foreach ($res as $item) {
    foreach ($item as $j) {
        if ($j % 2 == 0) {
            $sum = $sum + $j;
        }
    }
}
echo '<br>';
echo 'Сумма четных чисел = ' . $sum . '<br>';