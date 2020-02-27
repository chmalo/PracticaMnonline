<?php

class Unit {
	protected $vivo = true;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function move($direccion)
	{
		echo "<p>{$this->name} avanza hacia $direccion</p>";
	}

	public function attack($opponent)
	{ 
		echo "<p>{$this->name} lanza un golpe a $opponent</p>";
	}

}

class Soldado extends Unit
{
	public function attack($opponent)
	{ 
		echo "<p>{$this->name} corta a $opponent en dos</p> ";
	}	
}

class Arquero extends Unit{
	
}

$christian = new Soldado('Christian');
$christian->move('el norte');
$christian->attack('malo');