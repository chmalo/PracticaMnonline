<?php

class Account {

    protected $id;
    protected $name;
    protected $cedula;
    protected $email;
    protected $passwordpassword;

    public function __construct($name, $cedula)
    {
        $this->name = $name;
        $this->cedula = $cedula;
    }
}

?>