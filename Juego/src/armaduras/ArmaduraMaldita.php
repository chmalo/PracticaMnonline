<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraMaldita extends Armadura
{
	public function absorberDañoFisico(Attack $attack)
	{
		return $attack->getDaño() * 2;
	}

	public function absorberDañoMagico(Attack $attack)
	{
		return $attack->getDaño() * 4;
	}
	
}
