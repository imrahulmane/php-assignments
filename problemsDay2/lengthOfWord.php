<?php

function lengthOfWord($str) {

	if(empty($str)) {
		return "Empty String";
	}

	if(is_numeric($str)){
		return "Provide string of valid characters";
	}

	$array_words = explode(' ', $str);

	foreach ($array_words as $word ) {
		if (strlen($word) % 2 == 0) {
			echo "Even";
			echo "<br>";
		}else {
			echo "Odd";
			echo "<br>";
		}
	}

}

$str = 'Print every word in this sentence that has an even number of letters';
lengthOfWord($str);


?>
