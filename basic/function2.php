<?php
function testing($player, ...$menjadiArray) // menjadi array harus ditaruh paling belakang
{
    return $menjadiArray;
}

function testingKedua($player = "messi")
{
    return $player;
}

var_dump(testing("ronaldo", 1, 2, 3, 4, 5));
var_dump(testingKedua("ronaldo"));
var_dump(testingKedua()); //menjadi messi karena function testingKedua mempunyai nilai default
