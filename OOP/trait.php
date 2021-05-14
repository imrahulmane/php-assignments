<?php

trait message1 {
    public function msg1() {
        echo "OOP is fun! \n";
    }
}


trait message2 {
    public function msg2() {
        echo "OOP reduces code duplication\n";
    }
}

class Welcome {
    use message1;
}

class Welcome2 {
    use message1, message2;
}

$welcome = new Welcome();
$welcome->msg1();

$welcome2 = new Welcome2();
$welcome2->msg1();
$welcome2->msg2();