<?php 
$numberFirst;
$numberFirst = 10;
echo $numberFirst;
if (4 < 2) :
    echo "benar pertama";
elseif (4 < 5):
    echo "benar kedua";
else:
    echo "salah";
endif;

$numberTwo = 10;
$result = $numberFirst === $numberTwo ? "sama" : "tidak sama";
// echo $result; 
echo "\n".$result;
?>