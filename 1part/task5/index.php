<?php
$opel = array(
    "model" => "Omega",
    "speed" => "120",
    "doors" => "4",
    "year"  => "1998"
);
$bmw = array(
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year"  => "2015"
);
$toyota = array(
    "model" => "Land Cruiser",
    "speed" => "140",
    "doors" => "5",
    "year"  => "2015"
);
$car = array(
    "bmw"    => $bmw,
    "toyota" => $toyota,
    "opel"   => $opel
);

foreach ($car as $key => $item) {
    echo "CAR " . $key . "<br>";
    echo implode(' ', $item);
    echo "<br> <br>";
}