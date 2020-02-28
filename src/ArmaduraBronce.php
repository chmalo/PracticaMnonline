<?php

namespace Chmalo;

use Warcraft/Armadura as WarcraftArmadura;

class ArmaduraBronce implements WarcraftArmadura
{
	public function absorberDaño($daño)
	{
		return $daño / 2;
	}
}
