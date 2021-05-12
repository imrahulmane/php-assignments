<?php 

// multiple of 3 => Fizz
// multiple of 5 => Buzz
// multiple of 3 and also 5 => FizzBuzz

function fizzBuzz($x, $y) {
	if($x > $y){
		echo "$x should be less than $y";
	}

	$numbers = range($x, $y);

	foreach ($numbers as $num) {
		if ($num % 3 === 0 and $num % 5 === 0 ) {
			echo "FizzBuzz";
			echo "<br>";
		} elseif ($num % 5 === 0) {
				echo "Buzz";
				echo "<br>";
			
		} elseif ($num % 3 === 0) {
				echo "Fizz";
				echo "<br>";
		}else {
			echo $num;
			echo "<br>";
		}
	}
}

fizzBuzz(1, 20);


?>
