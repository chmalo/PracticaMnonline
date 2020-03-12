<?php
require_once ("Car.php");

class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;
    private $pasajeros;

    public function __construct($licencia, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($licencia, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function printDataCar(){
        if($this->pasajeros != null){
            echo "UberVan: Licencia: $this->licencia, Driver: ".$this->driver->name," ", $this->driver->cedula, " ","Pasajeros: $this->pasajeros";
            echo "<br>";
        }
    }

    public function setPasajeros($pasajeros){
        if($pasajeros == 6){
            $this->pasajeros = $pasajeros;
        }else{
            echo "Se necesitan 6 pasajeros ";
            echo "<br>";
        }
    }
}

?>