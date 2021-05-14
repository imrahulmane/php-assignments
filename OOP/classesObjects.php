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

    function changeName($updatedName) {
        $this->name = $updatedName;
    }
}


$apple = new Fruit();

$apple->setName('Apple');
$apple->setColor('Red');

echo $apple->getName() . "\n";
echo $apple->getColor() . "\n";
echo $apple->changeName('Mango') . "\n";
echo $apple->getName();

?>