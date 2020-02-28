<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;

class ArmaduraBronce implements Armadura
{
	public function absorberDaño($daño)
	{
		return $daño / 2;
	}
}
