<?php

$x = 1;

echo "while ==> ";
while ($x <= 10) {
	if ($x % 2 == 0) {
		echo $x;
		echo "<br>";
	}	
	$x++;
}


$y = 1;
echo "do While ==>";
do {
	echo $y;
	echo "<br>";
	$y++;
}while ($y <= 10);

$names = ['Sam', 'Williams', 'Andy', 'Ruby', 'Rosy'];

for($i = 0; $i <= sizeof($names); $i++){
	echo $names[$i];
	echo "<br>";
}

foreach ($names as $name) {
	echo $name . ", ";
}

echo "<br>";

$name_age = ["peter"=>35, "Ben"=>25, "Maxi"=>35];
foreach ($name_age as $key => $value) {
	echo "$key = $value<br>";
}

for($x = 0; $x < 10; $x++){
	if ($x == 3){
		continue;
	}
	if ($x == 8) {
		break;
	}
	echo "The number is: $x <br>";
}

?>