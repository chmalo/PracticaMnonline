<?php

namespace Chmalo;


require '../vendor/autoload.php';


$malo = new Unit('Malo' new armas\ArcoFuego;

$malo->setArmadura(new armaduras\ArmaduraBronce());

$christian = new Unit('Christian', new armas\EspadaBasica);

$christian->setArmadura(new armaduras\ArmaduraPlata());

$christian->attack($malo);

$malo->setArmadura(new armaduras\ArmaduraPlata());

$christian->attack($malo);

$malo->attack($christian); 
