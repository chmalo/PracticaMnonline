<?php

namespace Chmalo;

abstract class Armadura
{
	public function absorberDaño(Attack $attack)
	{
		if ($attack->isMagico()){
			return $this->absorberDañoMagico($attack);
		}

		return $this->absorberDañoFisico($attack);
	}

	public function absorberDañoFisico(Attack $attack)
	{
		return $attack->getDaño();	
	}

	public function absorberDañoMagico(Attack $attack)
	{
		return	$attack->getDaño();	
	}
}
