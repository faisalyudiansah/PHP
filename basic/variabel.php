<?php
$nameUser = "Ronaldo";
echo "Hello, my name is $nameUser";

// operator

$x = 10;
$z = 4;
echo $x + $z;

$a = 5;
$a++;
$a += 1;
echo $a;

// concat
$firstName = "Lionel";
$lastName = "Messi";
echo $firstName  . " " . $lastName;

$fullname = "Karim";
$fullname .= " ";
$fullname .= "Benzema";
echo $fullname;

//comparison
echo 1 > 5; // nothing
print 1 > 5; // nothing
print_r(1 > 5); // nothing
var_dump(1 > 5);
var_dump(1 == 1);
var_dump(1 == "1");
var_dump(1 === "1");

$f = 10;
$v = 30;
var_dump($f < 20 && $f % 2 === 0);
var_dump($v < 20 && $v % 2 === 0);
