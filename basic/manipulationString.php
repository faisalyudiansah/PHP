<?php 
$angka1 = "1";
$angka2 = "2";
echo $angka1 + $angka2 . PHP_EOL;   // hasil 3 karena php automatis ngerubahin string menjadi angka
echo $angka1 . $angka2 . "\n";      // hasil nya "12" . menggunakan dot untuk manipulation string lebih baik
var_dump($angka1 + $angka2);        // hasil 3 karena php automatis ngerubahin string menjadi angka
var_dump($angka1 . $angka2);        // hasil nya "12" . menggunakan dot untuk manipulation string lebih baik

$word1 = "cristiano";
$word2 = "ronaldo";
$text1 = "hallo my name is $word1 $word2";
var_dump($text1);

$word3 = "lionel";
$word4 = "messi";
$text2 = "hello my name is {$word3} {$word4}iiiiiii";   // seperti ${} di javascript
var_dump($text2);

?>