<?php 

// multiple of 3 => Fizz
// multiple of 5 => Buzz
// multiple of 3 and also 5 => FizzBuzz

function fizzBuzz($x, $y) {
	if($x >= $y){
		echo "$x should be less than $y\n";
		return null;
	}

	$numbers = range($x, $y);

	foreach ($numbers as $num) {
		if ($num % 3 === 0 and $num % 5 === 0 ) {
			echo "FizzBuzz\n";
			
		} elseif ($num % 5 === 0) {
				echo "Buzz\n";
				
			
		} elseif ($num % 3 === 0) {
				echo "Fizz\n";
				
		}else {
			echo "$num\n";
					}
	}
}

fizzBuzz(1, 200);


?>
