<?php

namespace Chmalo;

class Unit
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
		$attack = $this->arma->createAttack();

		show($attack->getDescription($this, $opponent));

		$opponent->takeDamage($attack);
	}

	public function takeDamage(Attack $attack) 
	{	
		$this->hp = $this->hp - $this->absorberDaño($attack);

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

	protected function absorberDaño(Attack $attack)
	{
		if ($this->armadura)
		{
			return $this->armadura->absorberDaño($attack);
		}

		return $attack->getDaño();
	}
}
