<?php
function testing($player, ...$menjadiArray) // menjadi array harus ditaruh paling belakang
{
    return $menjadiArray;
}

function anotherTesting($player = "messi")
{
    return $player;
}

var_dump(testing("ronaldo", 1, 2, 3, 4, 5));
var_dump(anotherTesting("ronaldo"));
var_dump(anotherTesting()); //menjadi messi karena function anotherTesting mempunyai nilai default
