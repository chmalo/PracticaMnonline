<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;
use Chmalo\Attack;

class ArmaduraPlata implements Armadura
{
	public function absorberDaño(Attack $attack)
	{
		if ($attack->isFisico()){
			return $attack->getDaño() / 3;
		}

		return	$attack->getDaño();	
	}
}
