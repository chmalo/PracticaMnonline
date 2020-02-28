<?php

namespace Chmalo;

abstract class Unit
{
	protected $hp = 40;
	protected $name;
	protected $arma
	protected $armadura;

	public function __construct($name, Arma $arma)
	{
		$this->name = $name;
		$this->arma = $arma;
	}

	public funtion setArma(Arma $arma)
	{
		$this->arma = $arma;
	}

	public function setArmadura($armadura = null)
	{
		$this->armadura = $armadura;   
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

	public function attack(Unit $opponent)
	{ 
		show($this->arma->getDescription($this, $opponent));

		$opponent->takeDamage($this->arma->getDaño();
	}

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

		protected function absorberDaño($daño)
	{
		if ($this->armadura)
		{
			$daño = $this->armadura->absorberDaño($daño);
		}
	}
}
