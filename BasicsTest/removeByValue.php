<?php
function removeElementByValue($arr, $element) {

    return array_diff($arr, [$element]);
}

$arr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
print_r(removeElementByValue($arr, 'Jan'));