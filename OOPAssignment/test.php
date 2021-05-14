<?php

interface Banking {
    public function deposit($amount);
    public function withdraw($amount);
    public function getBalance(); 
}

class Bank implements Banking {
    public function __construct($name, $email, $mobileNumber, $deposit, $type) {
        try {
            self::validateData($name, $email, $mobileNumber, $deposit, $type);
        }catch(Exception $e) {
            echo $e->getMessage();
            return null;
        }
        self::saveDetails();   
    }

    public function validateData($name, $email, $mobileNumber, $deposit, $type) {
        if(!ctype_alpha(str_replace(' ', '', $name))) {
            throw new Exception('Provide String');
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please Provide Proper Email');
        }

        if(!filter_var($mobileNumber, FILTER_VALIDATE_INT) || strlen((string)$mobileNumber) > 10) {
            throw new Exception('Please Provide Proper Mobile Number');
        }
        
        if(!is_int($deposit)) {
            throw new Exception('Please Provide Proper Deposit');
        }
        
        if(!ctype_alpha($type)) {
            throw new Exception('Provide Either Current or Saving AC type.');
        }

        if(strcasecmp($type, 'current') === 0 && $deposit < 30000) {
            throw new Exception('For current AC, you need to deposit of atleast RS. 30,000');
        }

        $this->name = $name;
        $this->email = $email;
        $this->mobileNumber = $mobileNumber;
        $this->deposit = $deposit;
        $this->type = $type;

    }

    public function deposit($amount) {
        // Deposit Amount
        $this->deposit += $amount;
        return "Deposit: You have deposited $amount, Your Balance is $this->deposit";
    }

    public function withdraw($amount) {
        //Withdraw Amount
        try {
            $this->checkWithdrawAmountIsValid($amount); //check amount is valid or not
            $this->deposit -= $amount;
            return " Withdrawed: You have remaining $this->deposit Balance in AC";
         } catch(Exception $e) {
            return $e->getMessage();
         }
    }

    public function getBalance() {
        //return Balance
        return $this->deposit;
    }

    private function checkWithdrawAmountIsValid($amount) {
        //check the given amount is smaller than the balance
        if ($amount > $this->deposit) {
            throw new Exception("Low Balance!! Your Balance is $this->deposit");
        }
    }

    private function saveDetails() {
        //saveDetails to JSON File
        $targetFile = $this->createFileWithUserMobileNumber();
        $jsonData = $this->processData();

        if(file_exists($targetFile)) {
            echo "User already Exist with the same Mobile Number \n";
            return 0;
        }
        file_put_contents($targetFile, $jsonData);
    }
    
    private function createFileWithUserMobileNumber() {
        // Creates file with user's mobile Number
        $targetDir = dirname(__FILE__) . "/details";
        $ext = '.json';
        $targetFile = $targetDir . "/" ."$this->mobileNumber" . "$ext";

        return $targetFile;
    }

    private function processData() {
        //convert data into JSON format.
        $obj = array(
            "name" => $this->name,
            "email" => $this->email,
            "mobileNumber" => $this->mobileNumber,
            "deposit" => $this->deposit,
            "type" => $this->type
        );

        return json_encode($obj);

    }
}

$user = new Bank('Rahul', 'Rahul@mail.com', 8087549059, 2000, 'saving');
// echo $user->deposit(10000) . "\n";
// echo $user->withdraw(50000) . "\n";
// echo $user->getName();