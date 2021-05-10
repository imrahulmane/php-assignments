<?php

echo "<h1> Numbers </h1>";

$x = 4567;
echo "Chek if $x is int or not ==> ";
var_dump(is_int($x));
echo "<br>";

$y = 47.98;
echo "Chek if $y is int or not ==> ";
var_dump(is_int($y));
echo "<br>";


echo "Chek if $y is float or not ==> ";
var_dump(is_float($y));
echo "<br>";


$infinity = 1.9e411;
echo "Check is $infinity is infinity or not ==> ";
var_dump(is_infinite($infinity));
echo "<br>";

$nan = acos(8);
echo "Check is $nan is nan or not ==> ";
var_dump($nan);
echo "<br>";


echo "Check is $x is numeric string ==> " ;
var_dump(is_numeric($x));
echo "<br>";

$num_string = "8090";
echo "Check if $num_string is numeric string ==> ";
var_dump(is_numeric($num_string));
echo "<br>";

$n = "80.90" + 100;
echo "Check is $n is numeric string ==> ";
var_dump(is_numeric($n));
echo "<br>";

$str = "Hello";
echo "Check if $str is numeric string ==> ";
var_dump(is_numeric($str));
echo "<br>";


echo "<h1> Type Casting </h1>";

$float = 3.1417;
$int_cast = (int) $float;
echo "After type casting $float to int ==> " . $int_cast;
echo "<br>";

$str_num = "3.1417";
$int_cast2 = (int)$str_num;
echo "After type casting string number $str_num to int ==> ". $int_cast2;
echo "<br>";

echo "<h1> Math Functions </h1>";

echo "Abs of -6.7 is ==> " . abs(-6.7);
echo "<br>";

echo "Square root of 64 is ==> ".sqrt(64);
echo "<br>";

echo "Round of 0.60 is ==> " .round(0.60);
echo "<br>";

echo "Round of 0.49 is ==> " .round(0.49);
echo "<br>";

echo "Generate random number from 10 to 100 ==> ". rand(10, 100);
echo "<br>";



?>
