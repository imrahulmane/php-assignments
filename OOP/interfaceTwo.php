<?php

interface PaymentInterface {
    public function payNow();
}

class Paypal implements PaymentInterface  {
    public function payNow() {
        echo "Payment Done through PayPal";
    }
}


class Visa implements PaymentInterface {
    public function payNow() {
        echo "Payment Done through Visa";
    }
}

class Cash implements PaymentInterface {
    public function payNow() {
        echo "Payment Done through Cash";
    }
}


class BuyProduct{
    public function pay(PaymentInterface $paymentType) {
        //this method receives class object as parameter.
        //we can access all the methods the given class has.
        $paymentType->payNow();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);