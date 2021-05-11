<?php 

$multi_arr = array(
	array(
		'id' => 89,
		'fname' => 'Peter',
		'lname' => 'Griffin',
	),
	array(
		'id' => 98,
		'fname' => 'Ben',
		'lname' => 'Smith',
	),
	array(
		'id' => 34,
		'fname' => 'Joe',
		'lname' => 'Doe',
	)
);

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

function printArray($arr) {
	for($row = 0; $row < count($arr); $row++){
		foreach ($arr[$row] as $key => $value) {
			echo "$key ==> $value" . "  ";
		}
		echo "<br>";
	}
}

$last_name = array_column($multi_arr, 'lname');
// print_r($last_name);

function test_odd($var) {
	if($var % 2 != 0) {
		return $var;
	}
}


// print_r(array_filter($arr, "test_odd"));


$a = array(
	"a" => "red",
	"b" => "green",
	"c" => "blue",
	"d" => "yellow"
);

$b = array(
	"p" => "red",
	"q" => "blue",
	"r" => "green",
	"s" => "yellow",
	"t" => "black"
);

// print_r(array_intersect($a, $b));

function squareNumber($var) {
	return $var ** 2;
}


// print_r(array_map("squareNumber", $arr));

#count with 1 parameter given will work recursively.
// echo count($multi_arr, 1);

// Other important array functions

$array = array(
	'websites' => array(
		'Search' => "Google",
		'Social' => "Facebook",
		"News" => "NY Times"		
	), 
	'friends' => array(
		'Chris', 'Jim', 'Lynn', 'Jeff', 'Joanna'
	)
);

#check if given is array or not
echo "is array example => " . is_array($a);
echo "<br>";


echo "Example of in_array ==> ". in_array('Chris', $array['friends']);
echo "<br>";


$merged = array_merge($array['websites'], $array['friends']);
print_r($merged);
echo "<br>";

echo "Array keys exaple ==> " ;
print_r(array_keys($merged));
echo "<br>";

$keys = array_keys($merged);
echo "Chek array key exists ==> ". array_key_exists(7, $keys);
echo "<br>";

echo "Example of array values ==> ";
print_r(array_values($merged));
echo "<br>";


//array shift example
$shifted = array_shift($array);
echo "Shifted array ==>  ";
print_r($shifted);


//old array
echo "Old array when done shiftign ==> ";
print_r($array);
echo "<br>";


//push back the shifted array to old array
echo "Example of array_push ==> ";
array_push($array, $shifted);
print_r($array);
echo "<br>";


//array pop
$shiftedWithPop = array_pop($array);

echo "After shifted original array ==> ";
print_r($array);
echo "<br>";
echo "Shifted array with array_pop ==> ";
print_r($shifted);
echo "<br>";

$index = array(
	'How to Eat Apples',
	'Surfing Safely in a Wave Pool',
	'The Best Foods For Breakfast',
	'How to Eat Apples',
	'25 tips to blogging nirvana',
	'The Best Egg Nogg Recipe for the Holidays'
);

$unique = array_unique($index);
print_r($unique);
echo "<br>";


$temp = array( "e", 1, 2, 3, 4, 5);
$surge = array_slice($temp, 1, 3);
print_r($surge);
echo "<br>";

$a = array(1, 2, 3, 8, 4, 9);
$diff = array_diff($temp, $a);
print_r($diff);
echo "<br>";

echo "Array Seach Example ==>  ";
$found = array_search(9, $a);
echo $found;
echo "<br>";

echo "Array Reverse Example ==> ";
$reveresd = array_reverse($a);
print_r($reveresd);
echo "<br>";


echo "Array sort ==> ";
sort($a);
print_r($a);
echo "<br>";



shuffle($a);
echo "Shuffled array ==> ";
print_r($a);
echo "<br>";

echo "Current Element in array ==> ";
echo current($a);
echo "<br>";
echo "Next Element in array ==>  ";
echo next($a);
echo "<br>";
echo "Previous Element in array ==>  ";
echo prev($a);
echo "<br>";





























?>