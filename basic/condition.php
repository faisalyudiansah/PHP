<?php 
$numberFirst;
$numberFirst = 10;
echo $numberFirst;
if (4 < 2) {
    echo "benar pertama";
} else if(4 < 5){
    echo "benar kedua";
} else {
    echo "salah";
}

$numberTwo = 10;
$result = $numberFirst === $numberTwo ? "sama" : "tidak sama";
// echo $result; 
echo "\n".$result;
?>