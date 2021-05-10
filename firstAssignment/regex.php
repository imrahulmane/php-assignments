<?php
$exp = "/w3schools/i";

$str = "Visit W3Schools";

echo preg_match($exp, $str);
echo "<br>";

$str2 = "The rain in SPAIN fallls mainly on the plains";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str2);
echo "<br>";

$str3 = "Visit Microsoft for Apple Products";
$pattern1 = "/microsoft/i";
echo preg_replace($pattern1, "Apple", $str3);