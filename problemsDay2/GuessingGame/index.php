<?php
// echo "\n";
define('MIN', 1);
define('MAX', 100);
define('RANDOM', rand(1, 100));

$lessThanTen = RANDOM - 10;
$GreaterThanTen = RANDOM + 10;

echo RANDOM;
echo "\n";

$correctGuess = true;
$count = 0;
$previousGuess = array();
while($correctGuess) {
	$guess = (int) readline('Guess the Number: ');

	if ($guess < MIN || $guess > MAX) {
		echo "OUT OF BOUNDS";
		echo "\n";
	}
	if($count == 0) {
		 if($guess > $lessThanTen && $guess < RANDOM ) {
		 	echo 'WARM!';
		 	echo "\n";
		 } elseif ($guess < $GreaterThanTen && $guess > RANDOM) {
		 	echo "COLD!";
		 	echo "\n";
		 }
	}

	$previousGuess[] = $guess;
	
	foreach ($previousGuess as $value) {
		echo "arry_value => $value\n";
	}

	if ($guess < end($previousGuess) && $guess !== RANDOM) {
		echo "COLDER\n";
	}

	if ($guess > end($previousGuess) && $guess !== RANDOM) {
		echo "WARMER\n";
	}

	$count++;
	if($guess == RANDOM) {
		echo "You Guessed Correctly and you took $count guesses";
		echo "\n";
		$correctGuess = false;
	}
	// array_shift($previousGuess);
}


?>