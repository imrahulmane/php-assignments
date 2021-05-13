<?php

class Fruit {
    public $name;
    public $color;

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
    
    function setColor($color){
        $this->color = $color;
    }

    function getColor() {
        return $this->color;
    }
}


$apple = new Fruit();

$apple->setName('Apple');
$apple->setColor('Red');

echo $apple->getName() . "\n";
echo $apple->getColor() . "\n";


?>