<?php 

function longestCommanEnding($str1, $str2) {

    $found = "";
    for($i = 0; $i < strlen($str2); $i++) {
        if(stripos($str1, $str2) != false) {
            $found = $str2;
            return $found;
        }
        $str2 = substr_replace($str2, '', $i, 1);
    }

    return $found;
}

echo longestCommanEnding("skyscraper", "carnivore");

// if(strpos("multiplication", "ation") != false) {
//     echo "done";
// }