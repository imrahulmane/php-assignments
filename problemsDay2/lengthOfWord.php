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

	foreach ($array_words as $key => $word ) {
		if (strlen($word) % 2 == 0) {
			$array_words[$key] = "Even";
		} 
	}

	return implode(' ', $array_words);

}

// $atr = "424";
$str = 'Print every word in this sentence that has an even number of letters';
print_r(lengthOfWord($str));


?>
