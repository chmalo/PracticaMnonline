<?php

class Account {

    public $id;
    public $name;
    public $cedula;
    public $email;
    public $password;

    public function __construct($name, $cedula)
    {
        $this->name = $name;
        $this->cedula = $cedula;
    }
}

?>