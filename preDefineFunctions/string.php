<?php 

echo "Example of addslasher ==> ";
$ex1 = addslashes("Hello This is the 'PHP', Server Side Scripting Language");
echo $ex1;
echo "<br>";

echo "Example of binary to hexa Decimal ==> ";
$ex2 = bin2hex('Hello');
echo $ex2;
echo "<br>";

$ex3 = 'Hello World PHP';
echo "Example of chop function ==> ";
echo "<br>";
echo "Before ==> " . $ex3 . "<br>";
echo chop($ex3, "PHP");

//convert ASCII to character
echo "Character value of 113 ==> ";
echo chr(113);
echo "<br>";

//split the characters and add something 
echo "Example of chunk_split() ==> ";
echo chunk_split($ex3, 1, " ");
echo "<br>";

//how many times ASCII characters occurs in a string
echo "Example of count_chars() ==> ";
print_r(count_chars($ex3, 3));
echo "<br>";

//convert string to array
echo "Example of explode() ==> ";
print_r(explode(" ", $ex3));
echo "<br>";


//join array elements with a string
$ex4 = array('Hello', 'World!', 'Beautiful', 'Day');
echo "Example of implode() ==> "; 
echo "Before ==> $ex4 <br>";
echo "After ==> ". implode(" ", $ex4);
echo "<br>";

//join
echo "using join ==> ".join(" ", $ex4);
echo "<br>";

echo "Lowercase first character of string ==> " . lcfirst($ex3);
echo "<br>";


echo "uppercase first character of string ==> " . ucfirst($ex3);
echo "<br>";

$ex5 = 'hello learning something new';
echo "Upppercase the first character of each word ==> ". ucwords($ex5);
echo "<br>";

echo "lowercase the string ==> " . strtolower($ex3);
echo "<br>";

echo "Upppercase the string ==>" . strtoupper($ex3);
echo "<br>";

//remove characters from the left side of string
echo "remove character from the left side of string ==> " . ltrim($ex3, "Hello");
echo "<br>";

echo "Example of number_format() ==> " . number_format(1000000, 2, ".", ",");
echo "<br>";


echo "Get the ASCII value of character ==> " . ord('h');
echo "<br>";


echo "Parse query string into variables parse_str() ==> ". parse_str("name=peter&nickname=spiderman&age=43") . "<br>" ;
echo $name . "<br>";
echo $nickname . "<br>";
echo $age . "<br>";

echo "Replace World with spiderman in string ==> " . str_ireplace('WORLD', 'spiderman', 'Hello World');
echo "<br>";


echo "Pad to the right side of the string ==> ";
echo str_pad($ex3, strlen($ex3)+5, '.');
echo "<br>";


echo "Shuffle the characters of the string str_shuffle() ==> ";
echo str_shuffle($ex3);
echo "<br>";

echo "Split to Array using arry_split() ==> ";
print_r(str_split('Hello'));
echo "<br>";

echo "word count in $ex3 string using str_word_count() ==> ";
print_r(str_word_count($ex3));
echo "<br>";

echo "Compare two strings case-insensetive using strcasecmp() ==> " . strcasecmp('hello world', 'HELLO WORLD');
echo "<br>";


echo "Find the first occurence of a word inside string and remaining string ==> ";
echo strchr("Hello world Peter", "world");
echo "<br>";

// 0 means true
echo "Case sensetive comparision of two strings ==> ";
echo strcmp("Hello World", "Hello World");
echo "<br>";

echo "Case sensetive comparision of two strings ==> ";
echo strcmp("Hello world", "Hello World");
echo "<br>";


echo "Remove HTML tags from string ==> ";
echo strip_tags("Hello <b>World</b>");
echo "<br>";

echo "Remove slashes from string ==> ";
echo stripslashes("Hell\o World \Rahul");
echo "<br>";

echo "Return the position of first occurence of the given word in string => ";
echo stripos("I love php, I love php", "PHP");
echo "<br>";

echo "Length of string ==> " . strlen("hello");
echo "<br>";

echo "Reverse a String ==> " . strrev("Hello");
echo "<br>";

echo "compare two strings from given position ==> ";
echo substr_compare("Hello World", "Hello World", 0);
echo "<br>";


#case-sensetive
echo "count the number of times word occurs in string ==> ";
echo substr_count("Hey World. The World is nice", "World");
echo "<br>";


$ex6 = 'Hello World!';
echo "trim the given word from string ==> ";
echo "$ex6<br>";
echo trim($ex6, 'Hed!');

































?>