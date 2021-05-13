<?php

class Vehicles {
    public $type;
    public $basePrice = 400;

    public function __construct($type) {
        $this->type = $type;
    }

    protected function getBasePrice() {
        return $this->basePrice;
    }
}

class TwoWheeler extends Vehicles {
    public function __construct($type, $price){
        parent::__construct($type);
        $this->price = $price;
    }

    public function info() {
        return "This is Two Wheeler";
    }

    public function getPrice() {
        $basePrice = $this->getBasePrice();
        return  $basePrice + $this->price;
    }

}


class ThreeWheeler extends TwoWheeler {
    public function __construct($type, $price, $color) {
        parent::__construct($type, $price);
        $this->color = $color;
    }


    public function getColor(){
        return $this->color;
    }
}


// $three = new ThreeWheeler('Three', '250', 'Red');
// echo $three->getColor() . "\n";
// echo $three->getPrice() . "\n";

class Dad {
    public $name = 'Damaji Mane';

    final function getName() {
        return $this->name;
    }
}

class child extends Dad {
    public $name = "Rahul Mane";

    function getName() {
        return $this->name;
    }
}

$chl = new child();
echo $chl->getName();