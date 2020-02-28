<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;

class ArmaduraMaldita implements Armadura
{
	public function absorberDaño($daño)
	{
		return $daño * 2;
	}
}
