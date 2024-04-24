<?php
$arr = ["indonesia", "malaysia", "singapore", "thailand"];
$arr2 = [
    "id" => 1,
    "name" => "ronaldo",
    true => "key nya 1",
    false => "key nya 0",
    5 => "key nya angka 5"
];

for ($i = 0; $i <= 3; $i++) {
    var_dump($arr[$i]);
}

foreach ($arr as $value) {
    echo  "$value \n";
}

foreach ($arr as $key => $value) {
    echo "$key: $value\n";
}

foreach ($arr2 as $key => $value) {
    echo "$key: $value\n";
}
