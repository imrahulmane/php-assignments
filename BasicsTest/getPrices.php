<?php
function getPrices($arr) {
    $result = [];
    foreach($arr as $val) {
        preg_match('#\((.*?)\)#', $val, $match);
        array_push($result, $match[1]);
    }

    return $result;

}

$arr = ["ice cream ($5.99)", "banana ($0.20)", "sandwich ($8.50)", "soup ($1.99)"];
print_r(getPrices($arr));
// print_r(getPrices(["salad ($4.99)"]));