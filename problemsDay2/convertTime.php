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

$str = '12:51:00AM';
echo convertTime($str);
echo "<br>";

// echo date("H:i:sA", strtotime($str));























?>