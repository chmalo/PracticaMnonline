<?php 

namespace Chmalo\Armadura;

use Chmalo\Armadura;
use Chmalo\Attack;

class MissingArmadura extends Armadura
{
	public function absorberDaño(Attack $attack)
	{
		return $attack->getDaño();
	}
}