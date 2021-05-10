<?php

$cars = ['BMW',  'Toyota', 'Audi', 'Volvo', 'Porsche'];
$names = array('Sam', 'Williams', 'Andy', 'Ruby', 'Rocky');

$name_age = [
	'Andy' => 25,
	'Ruby' => 20,
	"Rocky" => 18,
	"Williams" => 20
];

$multi = array(
	array('Volvo', 22, 18),
	array('BMW', 15, 13),
	array('Saab', 5, 2),
	array('Land Rover', 17, 15),
);


function printIndexedArrays($arr) {
	for ($i = 0; $i < sizeof($arr); $i++){
		echo $arr[$i];
		echo "<br>";
	}
}


function printAssociativeArrays($arr) {
	foreach ($arr as $key => $value) {
		echo "$key => $value <br>";
	}
}

function printMultidimensionalArray($arr) {
	for($row = 0; $row < count($arr); $row++){
		for($col = 0; $col < count($arr[$row]); $col++){
			echo $arr[$row][$col]. " ";
		}
		echo "<br>";
	}
}


printIndexedArrays($names);
printAssociativeArrays($name_age);
printMultidimensionalArray($multi);


?>