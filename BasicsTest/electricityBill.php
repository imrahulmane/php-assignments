<?php

function calculateElectricityBill($units){
    $bill = 0;
    $totalUnits = $units;
    if ($units > 250) {
        $bill += $units * 6.50;
        return $bill;
    } 

    if ( $units <= 50) {
        $bill += 3.50 * $units;
        return $bill;
    } else {
        $remaining = $units - 50 ;
        $fifty = $units - $remaining;
        $bill += $fifty * 3.50;
        if ($remaining <= 100) {
            $bill += $remaining  * 4.00;
            return $bill;
        } else {
            $remain = $remaining - 100;
            $bill += ($remaining - $remain) * 4.00;
            if ($remain > 0) {
                $bill += $remain * 5.20;
                return $bill;
            }
        }

    }
}


echo calculateElectricityBill(90);


