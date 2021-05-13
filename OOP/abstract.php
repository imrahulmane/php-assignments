<?php

abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro() : string;
}

class Audi extends Car {
    public function intro() : string {
        return "German Quality, I'm an $this->name";
    }
}

class Volvo extends Car{
    public function intro() : string {
        return "Proud to be Swedish!, I'm an $this->name";
    }
}

$audi = new Audi("Audi");
$volvo = new Volvo("Volvo");

echo $audi->intro() ."\n";
echo $volvo->intro();