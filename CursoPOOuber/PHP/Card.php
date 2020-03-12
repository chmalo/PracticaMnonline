<?php
require_once ("Paymemt.php");

class Card extends Payment {
    public $numTarjeta;
    public $cvv;
    public $fechaTarjeta;

    public function __construct($id, $numTarjeta, $cvv, $fechaTarjeta)
    {
        parent::__construct($id);
        $this->numTarjeta = $numTarjeta;
        $this->cvv = $cvv;
        $this->fechaTarjeta = $fechaTarjeta;
    }
}

?>
