<?php


function spyGame($arr) {
	$found = false;
	$secondFound = false;

	foreach($arr as $num) {
		if ($num === 0 && $found === false){
			$found = true;
			continue;
		}

		if($found && $num === 0) {
			$secondFound = true;
		}

		if($found && $secondFound && $num === 7) {
			return "true";
		}
	}

	return "false";
}

$arr = array(1,2,0,7,5,0,8,0,6,9,4,7,3);
echo spyGame($arr);














































?>
