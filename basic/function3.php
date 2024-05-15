<?php
function newTesting(int $a, int $b)
{
    return $a + $b;
}

var_dump(newTesting(10, 5));
var_dump(newTesting(10, "5")); // 5 akan automatis berubah
var_dump(newTesting(true, false)); // true automatis berubah menjadi 1, false menjadi 0
// var_dump(newTesting("messi", "ronaldo")); // akan error karena bukan integer dan tidak bisa diubah

