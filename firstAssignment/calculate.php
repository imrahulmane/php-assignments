<?php

 if(isset($_POST['submit'])) {
 	$num1 = $_POST['num1'];
 	$num2 = $_POST['num2'];
 	$operator = $_POST['operator'];

 	// echo calculate($num1, $num2, $operator);
 	echo calculateWithIf($num1, $num2, $operator);
}

function calculate($x, $y, $operator) {
 	switch ($operator) {
 		case "Add":
 			return $x + $y;
 			
 		case "Subtract":
 			return $x - $y;
 			
 		case "Multiply":
 			return $x * $y;
 			
 		case "Division":
 			return $x / $y;
 			
 		case "Modulo":
 			return $x % $y;
 			
 		default:
 			echo "Please Select valid operator";
 	}
 }

 function calculateWithIf($x, $y, $operator){
 	if ($operator === "Add") {
 		return $x + $y;
 	}
 	elseif ($operator === 'Subtract') {
 		return $x - $y;
 	}
 	elseif ($operator === 'Multiply') {
 		return $x * $y;
 	}
 	elseif ($operator === 'Division') {
 		return $x / $y;
 	}
 	elseif ($operator === 'Modulo') {
 		return $x % $y;
 	}

 	return "Please Select valid oeperator";
 }


?>