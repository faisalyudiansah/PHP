<?php
for ($i = 0; $i < 5; $i++) {
    echo "for";
};

$a = 0;
while ($a < 5) {
    echo "while";
    print_r($a);
    $a++;
}

$b = 0;
do {
    echo "do while";
    $b++;
} while ($b < 5);