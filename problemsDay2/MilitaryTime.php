<?php

function convertTime($str) {
	$time = substr($str, 0, 2);
	$amOrpm = substr($str, -2);

	if($amOrpm === 'AM' and $time === '12') {
		return '00' . substr($str, 2);
	}

	if ($amOrpm === 'PM' and $time != '12') {
		return (int)$time + 12 . substr($str, 2);
	}

	return $str;
}

$str = '02:51:00PM';
echo convertTime($str). "\n";
// echo "<br>";

// echo date("H:i:sA", strtotime($str)) . "\n";























?>