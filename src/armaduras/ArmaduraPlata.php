<?php

namespace Chmalo\Armaduras;

use Chmalo\Armadura;

class ArmaduraPlata implements Armadura
{
	public function absorberDaño($daño)
	{
		return $daño / 3;
	}
}
