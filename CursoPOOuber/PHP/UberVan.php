<?php
require_once ("Car.php");

class UberVan extends Car {
    protected $typeCarAccepted;
    protected $seatsMaterial;

    public function __construct($licencia, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($licencia, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;

    }
}

?>