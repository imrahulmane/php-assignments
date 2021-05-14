<?php

echo "Today is " . date("Y/m/d") . "\n";
echo "Today is " . date("d-m-Y") . "\n";
echo "Today is " . date("Y.m.d") . "\n";

//current date and time of the server
echo "The time is " . date("H:i:sa") . "\n";

//get timezone
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa") . "\n";

//maketime with mktime
$d = mktime(11, 14, 54, 8, 12, 2020);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "\n";

//create date from string 
$str = strtotime("11:30PPM April 15 2020");
echo "Created date is " . date("d-m-Y h:i:sA") . "\n";

//next three months
echo date("Y-m-d h:i:sa", strtotime("+6 Months")) . "\n";

//print Next 6 Saturdays

$startDate = strtotime("Saturday");
$endDate = strtotime("+6 weeks", $startDate);

while ($startDate < $endDate) {
    echo date("M d", $startDate) . "\n";
    $startDate = strtotime("+1 week", $startDate);
}