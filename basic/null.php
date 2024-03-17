<?php 
$variable = null;
define("CONST_NULL", null);
var_dump($variable);
var_dump(CONST_NULL);
echo "ini null : $variable";
echo "\n";

//======================================== builtin function is_null()
$check = is_null($variable); // true = 1 and false = 0
echo $check;
echo "\n";
var_dump($check);

//======================================== builtin function isset() seperti is_null
//======================================== check apakah variable nya ada dan tidak null
$variableTwo = "Hello World!";
$variableThree = null;
var_dump($variableTwo);
var_dump(isset($variableTwo)); // true
var_dump(isset($variableThree)); // false because null

// lebih aman menggunakan isset
// jika yakin variable ada, gunakan is_null()
// jika tidak yakin variable ada, gunakan isset()

//======================================== builtin function unset()
$hapusVariableIni = "dengan menggunakan unset";
var_dump($hapusVariableIni);
unset($hapusVariableIni); // delete $hapusVariableIni
var_dump($hapusVariableIni);

?>