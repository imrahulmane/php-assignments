<?php


function countUpperAndLowerChars($str) {

	if(empty($str)) {
		return "Empty String";
	}

	if(is_numeric($str)){
		return "Provide string of valid characters";
	}

	$removedPunctuations = preg_replace('/[^a-z\d]+/i', '', $str);
	$str_array = str_split($removedPunctuations);

	$upperCount = 0;
	$lowerCount = 0;

	foreach ($str_array as $char) {
		if(ctype_upper($char)){
			$upperCount++;
		} else {
			$lowerCount++;
		}		
	}

	return "Number of Uppercase Characters: $upperCount <br> Number of Lowercase Characters: $lowerCount";
}

$str = 'Hello Mr. Rogers, how are you this fine Tuesday?';
echo countUpperAndLowerChars($str1);




?>