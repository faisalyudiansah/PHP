<?php
/*
kebanyakan di bahasa pemrograman lain terdapat tipe data map (asosiasi antara key dan value), 
di bahasa pemrograman lain, array dan map itu beda
tapi di php itu array dan map itu sama

di php, map bisa di buat menggunakan array
array bisa digunakan pengganti map di bahasa pemrograman lain

secara default, array key index nya number, tapi kita menggantikannya menjadi string misalnya

hal tersebut seperti map di bahasa pemrograman lain

key index harus unique

*/

$arrayMapOne = array(
    "id" => 1,
    "name" => "ronaldo",
    "name" => "ronaldo <<< ini yang kena jika double",
    "retired" => false,
    true => "mengambil dengan index TRUE",
    true => "mengambil dengan index TRUE <<< ini yang kena jika double",
);
var_dump($arrayMapOne);
var_dump($arrayMapOne["name"]);
var_dump($arrayMapOne[true]);

echo "\n";

$arrayMapTwo = [
    "id" => 1,
    "name" => "ronaldo",
    "name" => "ronaldo <<< ini yang kena jika double",
    "retired" => false,
    true => "mengambil dengan index TRUE",
    true => "mengambil dengan index TRUE <<< ini yang kena jika double",
];
var_dump($arrayMapTwo);
var_dump($arrayMapTwo["name"]);
var_dump($arrayMapTwo[true]);
