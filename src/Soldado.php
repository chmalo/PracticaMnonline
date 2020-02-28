<?php

namespace Chmalo;

use Warcraft/Armadura as WarcraftArmadura;

class Soldado extends Unit
{

	protected $daño = 20;
	protected $armadura;

	public function __construct($name)
	{
		parent::__construct($name);
	}

	public function attack(Unit $opponent)
	{ 
		show("{$this->name} ataca con la espada a {$opponent-getName()}");

		$opponent->takeDamage($this->daño);
	}	

	public function setArmadura(WarcraftArmadura $armadura = null)
	{
		$this->armadura = $armadura;   
	}

	protected function absorberDaño($daño)
	{
		if ($this->armadura)
		{
			$daño = $this->armadura->absorberDaño($daño);
		}
	}
}
