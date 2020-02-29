<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraOro extends Armadura
{
	public function absorberDañoFisico(Attack $attack)
	{
		return $attack->getDaño() / 4;
	}
}
