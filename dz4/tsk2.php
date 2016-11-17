<?php
$parrots = array(
    'Archi' => array(
        "color" => "red",
        "strana_prois" => "Mexico",
        "poroda" => "ara"
    ),
    'Kesha' => array(
        "color" => "olive",
        "strana_prois" => "Australia",
        "poroda" => "volnistyi"
    ),
    'Kiki' => array(
        "color" => "grey",
        "strana_prois" => "Africa",
        "poroda" => "jako"
    )
);
$Json_parrots = json_encode($parrots);
$file = fopen("output.json", "w");
if (fwrite($file, $Json_parrots) === false) {
    echo "Err: запись в фаил не возможна";
}
fclose($file);
$Edit_parrots = json_decode(file_get_contents('output.json'), true);
$pr = mt_rand(0, 1);
if ($pr === 1) {
    echo "Изменения в данные внесены. <br>";
    $Edit_parrots[Archi][color] = "green";
    $Edit_parrots[Archi][poroda] = "kakadu";
    $Edit_parrots[Kesha][strana_prois] = "Russia";
    $Edit_parrots[Kiki][color] = "white";
    $Edit_parrots[Alien3][strana_prois] = "Japan";
} else {
    echo "Изменений не было. <br>";
}
$Json_parrots_Ed = json_encode($Edit_parrots);
$file_Ed = fopen("output2.json", "w");
if (fwrite($file_Ed, $Json_parrots_Ed) === false) {
    echo "Err: запись в фаил не возможна";
}
fclose($file_Ed);
$outputJson = json_decode(file_get_contents('output.json'), true);
$outputJson2 = json_decode(file_get_contents('output2.json'), true);
echo "<pre>";
foreach ($outputJson as $param => $val) {
    $result = array_diff($outputJson[$param], $outputJson2[$param]);
    foreach ($outputJson[$param] as $keyLayer2 => $infoLayer2) {
        if ($outputJson[$param][$keyLayer2] != $outputJson2[$param][$keyLayer2]) {
            echo $outputJson[$param][$keyLayer2] . " -> " . $outputJson2[$param][$keyLayer2] . "<br>";
        }
    }
    echo "<br>";
}