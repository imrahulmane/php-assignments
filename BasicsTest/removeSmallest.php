<?php

function removeSmallest($arr) {

    if(empty($arr)) {
        return [];
    }

    $smallest =  array_search(min($arr), $arr);

    // unset($arr[$smallest]);

    array_splice($arr, $smallest, 1);

    return $arr;

}

// print_r(removeSmallest([]));
print_r(removeSmallest([5, 3, 2, 1,4]));