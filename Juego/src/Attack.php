<?php

namespace Chmalo;

class Attack 
{
	protected $daño;
	protected $magico;
	protected $description;


	public function __construct($daño, $magico)
	{
		$this->daño = $daño;
		$this->magico = $magico;
		$this->description = $description;
	}

	public function getDescription(Unit $attacker, Unit $opponent)
	{
		return Traductor::get($this->description [
			'unit' => $attacker->getName(),
			'opponent' => $opponent->getName(),
		]);
	}

	public function getDaño()
	{
		return $this->daño;
	}

	public function isMagico()
	{
		return $this->magico;
	}

	public function isFisico()
	{
		return ! $this->isMagico();
	}
}
