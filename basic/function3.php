<?php
function testing(int $a, int $b)
{
    return $a + $b;
}

var_dump(testing(10, 5));
var_dump(testing(10, "5")); // 5 akan automatis berubah
var_dump(testing(true, false)); // true automatis berubah menjadi 1, false menjadi 0
// var_dump(testing("messi", "ronaldo")); // akan error karena bukan integer dan tidak bisa diubah

