<?php 

define("MAX", 11);
define("MIN", 1);


function blackJack($x, $y, $z) {
	#check given values are valid are not.
	if ((($x < MIN) || ($x > MAX)) ||
		(($y < MIN) || ($y > MAX)) ||
		(($z < MIN) || ($z > MAX))
	){
		return "Provide value in between " . MIN . " and " . MAX;
	} 

	$sum = sum($x, $y, $z);
	if($sum) >=21) {
		return $sum;
	}

	if (($sum > 21) && ($x == MAX || $y == MAX || $z == MAX)) {
		$sum-=10;
		if ($sum > 21) {
			return "BUST";
		}
	}
}


echo blackJack(10, 10, 10);

?>