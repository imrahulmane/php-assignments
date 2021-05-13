<?php

//check number is Odd
function checkOdd($num){
    if ($num % 2 === 0) {
        throw new Exception("Number must be odd");
    }
    return true;
}

try{
    checkOdd(3);
    echo "The number is odd\n";
} catch(Exception $e) {
    echo "Message " . $e->getMessage() ."\n"; 
}


//check if it is string
function checkString($str){
    if(is_numeric($str)) {
        throw new Exception("Please provide String");
    }
    return $str;
}

try {
    $str = readline("Give me String:  ");
    echo checkString($str) . "\n";
} catch(Exception $e) {
    echo $e -> getMessage() . "\n";
}






?>