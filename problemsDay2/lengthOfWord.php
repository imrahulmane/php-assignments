<?php

function lengthOfWord($str) {

	if(empty($str)) {
		echo "Empty String\n";
		return null;
	}

	if(is_numeric($str)){
		echo "Provide string of valid characters\n";
		return null;
	}

	$array_words = explode(' ', $str);

	foreach ($array_words as $word ) {
		if (strlen($word) % 2 == 0) {
			echo "Even\n";
		}else {
			echo "Odd\n";
		}
	}

}

// $atr = "424";
$str = 'Print every word in this sentence that has an even number of letters';
lengthOfWord($str);


?>
