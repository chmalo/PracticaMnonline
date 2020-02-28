<?php

namespace Chmalo;


require '../vendor/autoload.php';

$armadura = new armaduras\ArmaduraBronce();

$malo = new Arquero('Malo');

$christian = new Soldado('Christian');
//$christian->move('el norte');

$christian->attack($malo);

$christian->setArmadura(new armaduras\ArmaduraPlata);

$christian->attack($malo);

$malo->attack($christian);
