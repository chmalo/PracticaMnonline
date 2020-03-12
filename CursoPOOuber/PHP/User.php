<?php


require_once ("Account.php");

class User {

    public $name;
    public $cedula;

    public function __construct($name, $cedula)
    {
        $this->name = $name;
        $this->cedula = $cedula;
    }
}

?>