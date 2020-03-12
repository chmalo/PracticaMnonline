<?php

require_once ("Driver.php");
require_once ("Car.php");
require_once ("UberX.php");
require_once ("UberVan.php");

$uberX = new UberX("DGR12345", new Driver("christian fernandez", "C-224"), "chevrolet", "spark");
$uberX->setPasajeros(4);
$uberX->printDataCar();

$uberVan = new UberVan("DRG3456", new Driver("roberto fernandez", "C-3453"), "Van", "tapizado");
$uberVan->setPasajeros(6);
$uberVan->printDataCar();

?>
