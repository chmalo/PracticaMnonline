<?php
require_once ("Paymemt.php");

class Paypal extends Payment {
    public $email;


    public function __construct($id, $email)
    {
        parent::__construct($id);
        $this->email = $email;
    }
}

?> 
