<?php

use Account;

    class Car extends Account{
        protected $licencia;
        protected $driver;
        protected $pasajeros;

        public function __construct($licencia, $driver)
        {
            $this->licencia = $licencia;
            $this->driver = $driver;
        }
    }

?>
