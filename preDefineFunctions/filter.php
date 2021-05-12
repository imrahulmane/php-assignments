<?php


if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
	echo "Email found and it's valid";
	foreach (filter_list() as $key => $value) {
		echo $key . " ==> " . $value;
		echo "<br>";
	}
} else {
	echo "Email is not valid";
}

$email = 'test@gmail.com';

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "checked from filter_var(), $email is valid email address";
	echo "<br>";
}else {
	echo "checked from filter_var(), $email not valid";
	echo "<br>";
}

$str = 'Hello';
$int = 12;
$dbl = 3.84;
$ip = "127.0.0.1";
$url = 'https://google.com';


if (filter_var($int, FILTER_VALIDATE_INT)){
	echo "Integer is valid";
	echo "<br>";
}else {
	echo "Integer is not valid";
	echo "<br>";
}


if (filter_var($dbl, FILTER_VALIDATE_FLOAT)){
	echo "$dbl Float is valid";
	echo "<br>";
}else {
	echo "$dbl Float is not valid";
	echo "<br>";
}

if (filter_var($ip, FILTER_VALIDATE_IP)){
	echo "$ip is valid IP Address";
	echo "<br>";
} else {
	echo "$ip is not valid IP Address";
	echo "<br>";
}

if (filter_var($url, FILTER_VALIDATE_URL)){
	echo "$url is valid URL";
	echo "<br>";
}else {
	echo "$url is not valid URL";
	echo "<br>";
}

?>