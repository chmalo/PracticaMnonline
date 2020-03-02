<?php

namespace Chmalo;


require '../vendor/autoload.php';

Traductor::set([
	'ArcoBasicoAttack' => ':unit dispara una flecha a :opponent',
	'ArcoFuegoAttack' => ':unit dispara una flecha de fuego a :opponent',
	'BallestaAttack' => ':unit dispara una flecha a :opponent',
	'EspadaBasicaAttack' => ':unit ataca con la espada a :opponent',
]);


$malo = new Unit('Malo' new armas\ArcoFuego;

$malo->setArmadura(new armaduras\ArmaduraBronce());

$christian = new Unit('Christian', new armas\EspadaBasica);

$christian->setArmadura(new armaduras\ArmaduraMagica());

$christian->attack($malo);

$malo->setArmadura(new armaduras\ArmaduraPlata());

$christian->attack($malo);

$malo->attack($christian); 
