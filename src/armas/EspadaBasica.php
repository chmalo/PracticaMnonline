<?php

namespace Chmalo\armas;

use Chmalo\Arma;
use Chmalo\Unit;

class EspadaBasica extends Espada 
{
	protected $daño = 40;

	public function getDescription(Unit $attack, Unit $opponent)
	{
		return "{$attack->getName()} ataca con la espada a {$opponent->getName()}";
	} 
}
