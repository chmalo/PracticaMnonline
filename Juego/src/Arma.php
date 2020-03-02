<?php

namespace Chmalo;

abstract class Arma 
{
	protected $daño = 0;
	protected $magico = false;

	public function createAttack()
	{
		return new Attack($this->daño, $this->magico, $this->getDescriptionKey());
	}

	protected function getDescriptionKey()
	{
		return str_replace('Chmalo\armas\\', '', get_class($this)).'Attack';
	}

}
