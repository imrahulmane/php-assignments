<?php
error_reporting(0);
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
		$count++;
		continue;
	}
	
	if($count == 0) {
		 if($guess > $lessThanTen && $guess < RANDOM ) {
		 	echo 'WARM!';
		 	echo "\n";
			$count++;
			continue;
		 } elseif ($guess < $GreaterThanTen && $guess > RANDOM) {
		 	echo "COLD!";
		 	echo "\n";
			$count++;
			continue;
		 }
	}

	$previousGuess[] = $guess;
	
	foreach ($previousGuess as $value) {
		echo "arry_value => $value\n";
	}

	if ($guess < $previousGuess[count($previousGuess)-2] && $guess !== RANDOM) {
		echo "COLDER\n";
	}

	if ($guess > $previousGuess[count($previousGuess)-2] && $guess !== RANDOM) {
		echo "WARMER\n";
	}

	$count++;
	if($guess == RANDOM) {
		echo "You Guessed Correctly and you took $count guesses";
		echo "\n";
		$correctGuess = false;
	}

}


?>