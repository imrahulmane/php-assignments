<?php

function addNumbers(int $x, int $y) : int {
	return $x + $y;
}

function callMyName($name) {
	echo "$name <br>";
}

echo addNumbers(3, 4) . "<br>";
callMyName('Rahul');


#this will work because strict is not enabled, so "5 days" will converted to 5
#try enabling strict by adding declare(strict_types=1)
echo addNumbers(4, '5 Days');
echo "<br>";
//use pass-by-reference argument to update value
function addFive(&$value){
	$value += 5;
}
$num = 2;
addFive($num);
echo "updated with pass by reference argument ==> ".$num;

?>