<?php

require_once ("Driver.php");

    class Car {
        public $id;
        public $licencia;
        public $driver;
        public $pasajeros;

        public function __construct($licencia, $driver)
        {
            $this->licencia = $licencia;
            $this->driver = $driver;
        }

        public function printDataCar(){
            echo "Licencia: $this->licencia, Driver: ".$this->driver->name," ", $this->driver->cedula, " ", "Marca: $this->marca, Modelo: $this->modelo ";

        }
    }

?>
