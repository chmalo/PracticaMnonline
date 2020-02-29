<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraOro implements Armadura
{
	public function absorberDaño(Attack $attack)
	{
		if ($attack->isFisico()){
			return $attack->getDaño() / 4;
		}

		return	$attack->getDaño();	
	}
}
