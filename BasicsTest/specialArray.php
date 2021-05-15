<?php

function isEven($num) {
    if ($num % 2 == 0) {
        return true;
    }
    return false;
}


function isSpecial($arr) {
    $result = array();

    for($i=0; $i < count($arr); $i++) {
        if(isEven($i) && isEven($arr[$i])) {
            array_push($result, true);
        } elseif (!isEven($i) && !isEven($arr[$i])) {
            array_push($result, true);
        } else {
            array_push($result, false);
        }
    }

    if (in_array(false, $result)) {
        return "Not Special";
    }

    return "Special";
}


$arr = array(1, 2, 4, 4, 5, 6);
$arr2 = array(4, 3, 2, 9, 8, 17, 18, 19, 22, 29, 3);

echo isSpecial($arr2);