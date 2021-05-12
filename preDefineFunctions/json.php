<?php

$jsonObject = '{
	"Peter" : 35, 
	"Ben" : 37,
	"Joe" : 43
}';

var_dump(json_decode($jsonObject, true));
echo "<br>";

$obj = json_decode($jsonObject);

echo $obj->Peter;
echo "<br>";

$arr = array(
	"Name" => "Rahul",
	"Age" => 25,
	"ID" => 1
);


echo json_encode($arr);

?>