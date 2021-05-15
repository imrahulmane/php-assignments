<?php

function showTheLove($arr){
    $res = 0;
    $minIndex = array_search(min($arr), $arr);

    foreach($arr as $key => $val) {
        if($val !== ($arr[$minIndex])) {
            $twentyFivePercent = (25 / 100) * $val ;
            $res += $twentyFivePercent;
            $arr[$key] = $val - $twentyFivePercent;
        }
    }

    $arr[$minIndex] += $res;

    return $arr;
}

print_r(showTheLove([2, 100]));