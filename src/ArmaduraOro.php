<?php

namespace Chmalo;

use Warcraft/Armadura as WarcraftArmadura;

class ArmaduraOro implements WarcraftArmadura
{
	public function absorberDaño($daño)
	{
		return $daño / 4;
	}
}
