<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraMagica extends Armadura
{
	public function absorberDañoMagico(Attack $attack)
	{
		return $attack->getDaño() / 2;	
	}
}