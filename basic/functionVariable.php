<?php
function testing(string $a, int $b)
{
    return  "$a $b";
}

$newVariable = "testing";   // nama function nya disini dan dimasukkan ke sebuah variable
var_dump($newVariable("ronaldo", 2));

// contoh penggunaan, CALLBACK
$player = "kaka";
var_dump(strtoupper($player));

function testingNew(string $a, $builtInFunction)
{
    $value = $builtInFunction($a);
    return $value;
}

var_dump(testingNew("MESSI", "strtolower"));
var_dump(testingNew("ronaldo", "strtoupper"));