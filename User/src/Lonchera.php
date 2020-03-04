<?php

namespace Chmalo;

class Lonchera 
{
	protected $comida = [];
	protected $original = true;

	public function __construct(array $comida = [])
	{
		$this->comida = $comida;
	}

	public function __clone()
	{
		$this->original = false;
	}

	public function shift()
	{
		return array_shift($this->comida);
	}

	public function isEmpty()
	{
		return empty($this->comida);
	}
} 