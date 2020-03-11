<?php

require_once ("Account.php");
require_once ("Car.php");
require_once ("UberX.php");
require_once ("UberPool.php");

$uberX = new UberX("DGR12345", new Account("christian fernandez", "C-224"), "chevrolet", "spark");
$uberX->printDataCar();

$uberPool = new UberPool("FRY235", new Account("roberto fernandez", "C-3453"), "toyota", "corolla");
$uberPool->printDataCar();
?>