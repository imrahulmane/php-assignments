<?php

echo "<h1>Datatypes</h1>";
// echo "<br";

$strWithDoubleQuotes = "I'm string with double quotes";
$strWithSingleQuotes = 'I\'m string with single quotes';
$str = "Hello";
$str2 = "Hello World";

echo $strWithSingleQuotes;
echo "<br>";
echo $strWithDoubleQuotes;
echo "<br>";
echo var_dump($strWithSingleQuotes);
echo "<br>";
echo var_dump($strWithDoubleQuotes);
echo "<br>";

$int = 1234;
echo "Example of int => $int";
echo "<br>";
echo var_dump($int);
echo "<br>";


$float = 3.1417;
echo "Example of Float => $float";
echo "<br>";
echo var_dump($float);
echo "<br>";


$imTrue = true;
$imFalse = false;

echo "Example of boolean => $imTrue";
echo "<br>";
echo "Example of boolean => $imFalse";
echo "<br>";
echo var_dump($imTrue);
echo var_dump($imFalse);
echo "<br>";


$imNull = null;
echo $imNull;
echo "<br>";
echo var_dump($imNull);




echo "<h1> String Functions </h1>";

echo "Length of the string, $strWithSingleQuotes is ==>  " . strlen($strWithSingleQuotes);
echo "<br>";

echo "total words in the string $strWithSingleQuotes is ==> " . str_word_count($strWithSingleQuotes);
echo "<br>";

echo "Reverse of the string $str is ==> " . strrev($str);
echo "<br>";

echo "Position of single in the string $strWithSingleQuotes is ==> " .strpos($strWithSingleQuotes, 'single');
echo "<br>";

echo "Replace World with Rahul in the string $str2 ==> ". 
	str_replace("World", "Rahul", $str2);
echo "<br>";
?>