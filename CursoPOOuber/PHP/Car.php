<?php

require_once ("Account.php");

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
            echo "licencia: $this->licencia, driver: ".$this->driver->name;

        }
    }

?>
