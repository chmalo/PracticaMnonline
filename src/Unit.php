<?php

namespace Chmalo;

abstract class Unit
{
	protected $hp = 40;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{ 
		return $this->name;
	}

	public function getHp()
	{
		return $this->hp;
	}


	public function move($direccion)
	{
		show("{$this->name} camina hacia $direccion");
	}

	abstract public function attack(Unit $opponent);

	public function takeDamage($daño)
	{	
		$this->hp = $this->hp - $this->absorberDaño($daño);

		show("{$this->name} ahora tiene {$this->hp} puntos de vida"); 

		if ($this->hp <= 0)
		{
			$this->die();
		}
		
	}

	public function die()
	{	
		show("{$this->name} muere"); 

		exit();
	}

	protected function absorberDaño($daño)
	{
		return $daño;
	}
}
