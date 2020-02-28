<?php

namespace Chmalo\armas;

use Chmalo\Arma;
use Chmalo\Unit;

class ArcoBasico extends Arco 
{
	protected $daño = 20; 

	public function getDescription(Unit $attack, Unit $opponent)
	{
		return "{$attack->getName()} dispara una flecha a {$opponent->getName()}";
	} 
}
