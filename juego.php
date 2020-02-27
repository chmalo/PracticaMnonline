<?php

function show($mensaje)
{
	echo "<p>$mensaje</p>";
}

abstract class Unit {
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
		$this->setHp($this->hp - $daño);

		if ($this->hp <= 0)
		{
			$this->die();
		}
		
	}

	public function die()
	{	
		show("{$this->name} muere"); 
	}

		private function setHp($puntos)
	{
		$this->hp = $puntos;

		show("{$this->name} ahora tiene {$this->hp} puntos de vida"); 
	}
}


class Soldado extends Unit
{

	protected $daño = 20;

	public function attack(Unit $opponent)
	{ 
		show("{$this->name} corta a {$opponent-getName()} en dos");

		$opponent->takeDamage($this->daño);
	}	

	public function takeDamage($daño)
	{
		if (rand(0, 1)){
			return parent::takeDamage($daño / 2);
		}
		
	}
}


class Arquero extends Unit
{
	protected $daño = 30;

	public function attack(Unit $opponent) 
	{ 
		show("{$this->name} dispara una flecha a {$opponent->getName()}");

		$opponent->takeDamage($this->daño);
	}	

	public function takeDamage()
	{
		return parent::takeDamage($daño * 2);
	}
}


$malo = new Arquero('Malo');

$christian = new Soldado('Christian');
//$christian->move('el norte');

$christian->attack($malo);

$christian->attack($malo);

$malo->attack($christian);