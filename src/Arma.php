<?php

namespace Chmalo;

abstract class Arma 
{
	protected $daño = 0;
	protected $magico = false;
	protected $description = ':unit ataca a :opponent';

	public function createAttack()
	{
		return new Attack($this->daño, $this->magico, $this->description);
	}

}
