<?php 
$a = 10;
$resultOne = $a++; // hasil 10 , di taruh ke variabel dulu setelah itu di increment
var_dump($resultOne);

$b = 10;
$resultTwo = ++$b; // hasil 11, di increment dulu , setelah itu taruh ke variabel
var_dump($resultTwo);

$c = 10;
$resultThree = $c--; // hasil 10 , di taruh ke variabel dulu setelah itu di decrement
var_dump($resultThree);

$d = 10;
$resultFour = --$d; // hasil 11, di decrement dulu , setelah itu taruh ke variabel
var_dump($resultFour);
?>