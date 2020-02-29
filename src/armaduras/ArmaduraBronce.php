<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraBronce extends Armadura
{
	public function absorberDañoFisico(Attack $attack)
	{
		return $attack->getDaño() / 2;	
	}
}
