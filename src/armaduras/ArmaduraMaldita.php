<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraMaldita implements Armadura
{
	public function absorberDaño(Attack $attack)
	{
		if ($attack->isFisico()){
			return $attack->getDaño() * 2;
		}

		return $attack->getDaño() * 4;
	}
}
