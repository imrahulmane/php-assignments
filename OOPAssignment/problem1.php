<?php

class Bank {
    public function __construct($name, $email, $mobileNumber, $deposit=0, $type) {
        // self::test();
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

$user = new Bank('0', 'Rahul@gmail.com', 8087549050, 200, 'saving');
echo $user->deposit(10000) . "\n";
// echo $user->deposit(40000) . "\n";
// echo $user->withdraw(5000) . "\n";
// echo $user->deposit(5000) . "\n"; 
// echo $user->deposit(15000) . "\n";
// echo $user->withdraw(5000) . "\n";





    // public function withdraw($amount) {
    //     if (!$this->checkAmount($amount)) {
    //         return "Low Balance!! Your Balance is $this->deposit";
            
    //     }
    //     $this->deposit -= $amount;
    //     return "You have remaining $this->deposit Balance in AC";
    // }

    // private function checkAmount($amount) {
    //     if($amount > $this->deposit) {
    //         return false;
    //     }
    //     return true;
    // }
