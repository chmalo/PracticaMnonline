<?php
require_once ("Car.php");

class UberX extends Car {
    protected $marca;
    protected $modelo;

    public function __construct($licencia, $driver, $marca, $modelo)
    {
        parent::__construct($licencia, $driver);
        $this->marca = $marca;
        $this->modelo = $modelo;
    }


}

?>