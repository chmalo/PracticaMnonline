<?php

require_once ("Driver.php");
require_once ("Car.php");
require_once ("UberX.php");
require_once ("UberPool.php");

$uberX = new UberX("DGR12345", new Driver("christian fernandez", "C-224"), "chevrolet", "spark");
$uberX->printDataCar();

$uberPool = new UberPool("FRY235", new Driver("roberto fernandez", "C-3453"), "toyota", "corolla");
$uberPool->printDataCar();
?>