<?php

function summer69($arr) {
	$arrLength = count($arr);
	if ($arrLength == 0){
		return 0;
	} 

	if ($arrLength == 1) {
		return $arr[0];
	}

	$found = false;
	$sum = 0;

	for($i = 0; $i < $arrLength; $i++) {
		if ($arr[$i] == 6) {
			$found = true;
			continue;
		} 
		
		if($found) {
			if($arr[$i] == 9) {
				$found = false;
				continue;
			}
			continue;
		}

		$sum += $arr[$i];
	}

	return $sum;
}

echo summer69([2,1,6,8,9,11]);

?>