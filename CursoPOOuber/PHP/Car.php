<?php

    class Car {
        protected $licencia;
        protected $driver;
        protected $pasajeros;

        public function __construct($licencia, $driver)
        {
            $this->licencia = $licencia;
            $this->driver = $driver;
        }

        public function getLicense(){
           return $this->licencia;
        }

        public function getDriver(){
            return $this->driver;
        }
    }

?>
