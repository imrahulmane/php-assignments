<?php

class Bank {
    public function __construct($name, $email, $mobileNumber, $deposit=0, $type) {
        $this->name = $name;
        $this->email = $email;
        $this->mobileNumber = $mobileNumber;
        $this->deposit = $deposit;
        $this->type = $type;   
    }

    public function test() {
        if (is_numeric($this->name)) {
           throw new Exception('Provide string');
        }
    }
    public function deposit($amount) {
        $this->deposit += $amount;
        return "You have deposited $amount, Your Balance is $this->deposit";
    }

    public function withdraw($amount) {
        try {
            $this->checkWithdrawAmountIsValid($amount);
            $this->deposit -= $amount;
            return "You have remaining $this->deposit Balance in AC";
         } catch(Exception $e) {
            return $e->getMessage();
         }
    }

    private function checkWithdrawAmountIsValid($amount) {
        if ($amount > $this->deposit) {
            throw new Exception("Low Balance!! Your Balance is $this->deposit");
        }
    }


}

$user = new Bank('0', 'Rahul@gmail.com', 9090909090 , 200, 'saving');
echo $user->deposit(10000) . "\n";
