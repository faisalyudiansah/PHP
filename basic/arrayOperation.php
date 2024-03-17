<?php 
//======================================== get data with index
$arrayOne = array(2, 30, true, "halo");
var_dump($arrayOne[3]);

//======================================== change data
$arrayTwo = [2, 30, true, "halo"];
$arrayTwo[1] = 5;
print_r($arrayTwo);

//======================================== add data to the last index, like .push() javascript
$arrayThree = [2, 30, true, "halo"];
$arrayThree[] = 90;
var_dump($arrayThree);

//======================================== delete data with index
$arrayFour = [2, 30, true, "halo"];
unset($arrayFour[0]);
var_dump($arrayFour);

//======================================== counting data in an array
$arrayFive = [2, 30, true, "halo"];
$countArray = count($arrayFive);
echo $countArray;
echo "\n";
var_dump($countArray);

?>