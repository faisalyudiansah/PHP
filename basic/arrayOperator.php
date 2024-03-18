<?php
$arrayOne = [2, 30, true, "halo"];
$arrayTwo = [21, 33, false, "woi"];
$arrayThree = [2, 30, true, "halo"];
$arrayFour = [30, "halo", 2, true];

$resultOne = $arrayOne + $arrayTwo;
var_dump($resultOne);

$resultTwo = $arrayOne === $arrayThree;
var_dump($resultTwo);

$resultThree = $arrayOne !== $arrayTwo;
var_dump($resultThree);

$resultFour = $arrayOne == $arrayFour;
var_dump($resultFour);

//======================================== jika dalam bentuk map, baru bisa gabung

$arrayFive = [
    "name" => "John Doe"
];
$arraySix = [
    "name" => "Reus",   // key yang bentrok akan di ignore , "name" di arrayFive akan muncul duluan karena $arrayFive + $arraysix
    "club" => "Dortmund"
];
$arraySeven = [
    "club" => "Dortmund",
    "name" => "Reus"
];
$resultFive = $arrayFive + $arraySix;
var_dump($resultFive);

$resultSix = $arraySix == $arraySeven; // true
var_dump($resultSix);

$resultSeven = $arraySix === $arraySeven; // false karena urutan nya beda
var_dump($resultSeven);