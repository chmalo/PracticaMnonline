<?php

require_once ("Driver.php");

    class Car {
        public $id;
        public $licencia;
        public $driver;
        private $pasajeros;

        public function __construct($licencia, $driver)
        {
            $this->licencia = $licencia;
            $this->driver = $driver;
        }

        public function printDataCar(){
            if($this->pasajeros != null){
                echo "Licencia: $this->licencia, Driver: ".$this->driver->name," ", $this->driver->cedula, " ","Pasajeros: $this->pasajeros, ", " ", "Marca: $this->marca, Modelo: $this->modelo ";
                echo "<br>";
            }
        }

        public function getPasajeros(){
            return $this->pasajeros;
        }

        public function setPasajeros($pasajeros){
            if($pasajeros == 4){
                $this->pasajeros = $pasajeros;
            }else{
                echo "Se necesitan 4 pasajeros ";
                echo "<br>";
            }
        }

        
    }
?>
