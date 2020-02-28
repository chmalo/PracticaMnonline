<?php

namespace Chmalo\armas;

use Chmalo\Arma;
use Chmalo\Unit;

class Ballesta extends Arco 
{
	protected $daño = 40; 

	public function getDescription(Unit $attack, Unit $opponent)
	{
		return "{$attack->getName()} dispara una flecha a {$opponent->getName()}";
	} 
}
