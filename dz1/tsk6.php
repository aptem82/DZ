<?php
/**
 * Created by PhpStorm.
 * User: fil
 * Date: 01.11.2016
 * Time: 2:58
 */
$bmv = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015
);
$toyota = array(
    "model" => "CAMRY",
    "speed" => 210,
    "doors" => 5,
    "year" => 2014
);
$opel = array(
    "model" => "CORSA",
    "speed" => 180,
    "doors" => 3,
    "year" => 2011
);

$autos = array(
    "bmv" => $bmv,
    "toyota" => $toyota,
    "opel" => $opel
);
foreach ($autos as $auto => $value) {
    echo "CAR $auto: <br>";
    echo " {$value['model']}"." {$value["speed"]}"." {$value ["doors"]}"." {$value ["years"]} <br>";
}
