<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;

class ArmaduraOro implements Armadura
{
	public function absorberDaño($daño)
	{
		return $daño / 4;
	}
}
