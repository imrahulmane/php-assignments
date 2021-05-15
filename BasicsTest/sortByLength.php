<?php

function sortByLength($arr) {
    $res = array();

    foreach($arr as $val) {
        $res[$val] = strlen($val);
    }
    asort($res);

    return array_keys($res);
}

print_r(sortByLength(["Leonardo", "Michelangelo", "Raphael", "Donatello"]));