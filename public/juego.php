<?php

namespace Chmalo;


require '../vendor/autoload.php';


$malo = new Arquero('Malo' new armas\Ballesta;

$malo->setArmadura(new armaduras\ArmaduraBronce());

$christian = new Soldado('Christian', new armas\EspadaBasica);

$christian->attack($malo);

$malo->setArmadura(new armaduras\ArmaduraPlata());

$christian->attack($malo);

$malo->attack($christian);
