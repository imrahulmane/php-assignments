<?php

#string concatination done by using . (dot)
$var1 = "Hello World" ;
echo $var1 . "<br>";

#if you want to use variable inside string use double quotes.
$var2 = "India";
echo "Example of using variable inside string ==> I love my $var2";
echo "<br>";

#concatination using . (dot)
echo 'Example of concatination of string using  . (dot) ==> ' . 'I love ' . $var2 . '<br>';

#static keyword
function myTest() {
	static $x = 0;
	echo "Example of static keyword ==> $x";
	echo "<br>";
	$x++;
}

myTest();
myTest();
myTest();


echo "this ", "string ", "was ", "made ", "with multiple parameters";
echo "<br>";

print "Using print statement ==> Rahul $var1";

?>
