<?php

//private --> access within the class only
//protected --> acees inside class as well as inherited class
//public --> can be access anywhere

class Fruit {
    public $name;
    public $color;
    public $weight;

    function setName($name) {
        $this->name = $name;
    }

    protected function setColor($color) {
        $this -> color = $color;
    }

    private function setWeight($color) {
        $this -> weight = $weight;
    }
}

$apple = new Fruit();
$apple->setName('Banana');
$apple->setColor('Red');
$apple->setWeight(400);