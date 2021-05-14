<?php

class Books {
    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    function getPrice() {
        return $this->price;
    }

    function getName() {
        return $this->name;
    }

    public function changePrice($updatedPrice) {
        $this->price = $updatedPrice;
    }
}


$firstBook = new Books('Book 1', 250);
$secondBook = new Books('Book 2', 300);

echo "The Book name is ". $firstBook->getName() . " and price is  " . 
$firstBook->getPrice() . "\n";
$firstBook->changePrice(400) . "\n";
echo "The Book name is ". $firstBook->getName() . " and price is  " . 
$firstBook->getPrice() . "\n";