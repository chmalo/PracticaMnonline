<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraPlata extends Armadura
{
	public function absorberDañoFisico(Attack $attack)
	{
		return $attack->getDaño() / 3;	
	}
}
