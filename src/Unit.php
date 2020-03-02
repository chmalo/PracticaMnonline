<?php

namespace Chmalo;

use Chmalo\armaduras\MissingArmadura;

class Unit
{
	protected $hp = 40;
	protected $name;
	protected $arma;
	protected $armadura;

	public function __construct($name, Arma $arma, $logger)
	{
		$this->name = $name;
		$this->arma = $arma;
		$this->armadura = new MissingArmadura();
	}

	public static function crearSoldado()
	{
		$soldado = new Unit('Christian', new armas\EspadaBasica);
		$soldado->setArmadura(new armaduras\ArmaduraBronce());

		return $soldado;
	}

	public static function crearArquero()
	{
		$arquero = new Unit('Malo', new armas\ArcoBasico);
		$arquero->setArmadura(new armaduras\ArmaduraBronce());

		return $arquero;
	}

	public funtion setArma(Arma $arma)
	{
		$this->arma = $arma;

		return $this;
	}

	public function setArmadura($armadura = null)
	{
		$this->armadura = $armadura;

		return $this;   
	}

	public function setEscudo()
	{
		return $this;
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
		Log::info("{$this->name} camina hacia $direccion");  
	}

	public function attack(Unit $opponent)
	{ 
		$attack = $this->arma->createAttack();

		Log::info($attack->getDescription($this, $opponent));

		$opponent->takeDamage($attack);
	}

	public function takeDamage(Attack $attack) 
	{	
		$this->hp = $this->hp - $this->armadura->absorberDaño($attack);
		
		Log::info("{$this->name} ahora tiene {$this->hp} puntos de vida"); 

		if ($this->hp <= 0){
			$this->die(); 
		}
		
	}

	public function die()
	{	
		Log::info("{$this->name} muere"); 

		exit();
	}

}
