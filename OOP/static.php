<?php

class Person {
    public static $drivingAge = 18;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function checkElegibleForDriving() {
        if( $this->age >= self::$drivingAge) {
            return "You're Eligible";
        }

        return "You're not eligible right now";
    }

    public static function getAgeForDrinking() {
        return "The age for drinking is 18";
    }
}

$person1 = new Person('Rahul', 17);
echo $person1->checkElegibleForDriving();

echo Person::getAgeForDrinking();