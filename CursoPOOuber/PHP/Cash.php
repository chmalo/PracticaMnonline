<?php
require_once ("Paymemt.php");

class Paypal extends Payment {

    public function __construct($id)
    {
        parent::__construct($id);
    }
}

?>