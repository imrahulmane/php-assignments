<?php

define('GREETINGS', 'Welcome to PHP World!');
define('cars', ['BMW', 'Toyota', 'Audi', 'Tata']);

echo GREETINGS;
echo "<br>";
echo greetings;
echo "<br>";

echo cars[2];
echo "<br>";

function test() {
	#constants are globals can be used across the entire script.
	echo "Calling from function ==> " . GREETINGS;
	echo "<br>";
}

test();
echo "<br>";

?>