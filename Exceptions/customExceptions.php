<?php

class customException extends Exception {
    public function errorMessage() {
        $errorMsg = 'Error on line ' . $this->getLine() . ' in '.
         $this->getFile() . ": " . $this->getMessage().
          " is not valid email";

         return $errorMsg;
    }
}

$email = "somegmail.com";

try {
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        throw new customException($email);
    }

    if(strpos($email, "example")){
        throw new Exception("$email is an example email");
    }
} catch(customException $e) {
    echo $e->errorMessage() . "\n";
} catch(Exception $e) {
    echo $e->getMessage() . "\n";
}

?>