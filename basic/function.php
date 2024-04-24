<?php 
$dateToday = date("l, D-M-Y, Timezone, j \n");
echo $dateToday;

function testFunction() {
    echo "This is a function \n";
}
testFunction();
testFunction();

function functionWithParams($name) {
    echo "Halo my name is $name \n";
}

functionWithParams("ronaldo");
functionWithParams("messi");

?>