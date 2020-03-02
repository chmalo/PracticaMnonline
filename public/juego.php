<?php

namespace Chmalo;


require '../vendor/autoload.php';

Traductor::set([
	'ArcoBasicoAttack' => ':unit dispara una flecha a :opponent',
	'ArcoFuegoAttack' => ':unit dispara una flecha de fuego a :opponent',
	'BallestaAttack' => ':unit dispara una flecha a :opponent',
	'EspadaBasicaAttack' => ':unit ataca con la espada a :opponent',
]);

Log::setLogger(new HtmlLogger());

$malo = Unit::crearArquero()
			->setArma(new armas\ArcoFuego());

$christian = Unit::crearSoldado()
				->setArmadura(new armaduras\ArmaduraMagica())
				->setEscudo();

$christian->attack($malo);
 
$malo->setArmadura(new armaduras\ArmaduraPlata());

$christian->attack($malo);

$malo->attack($christian); 
