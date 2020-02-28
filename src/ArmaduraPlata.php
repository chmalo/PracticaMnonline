<?php

namespace Chmalo;

use Warcraft/Armadura as WarcraftArmadura;

class ArmaduraPlata implements WarcraftArmadura
{
	public function absorberDaño($daño)
	{
		return $daño / 3;
	}
}
