<?php

namespace Chmalo;

abstract class Arma 
{
	protected $daño = 0;

	public function getDaño()
	{
		return $this->daño;
	}

	abstract public function getDescription(Unit $attack, Unit $opponent);
}
