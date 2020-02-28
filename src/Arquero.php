<?php

namespace Chmalo;

class Arquero extends Unit
{
	protected $daño = 30;

	public function attack(Unit $opponent) 
	{ 
		show("{$this->name} dispara una flecha a {$opponent->getName()}");

		$opponent->takeDamage($this->daño);
	}	
}
