<?php

require_once ("Account.php");
require_once ("Car.php");

$car = new Car("DGR123", new Account("christian fernandez", "C-224"));

$car->printDataCar();
?>