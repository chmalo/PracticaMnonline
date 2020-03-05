<?php

namespace Chmalo;

class Lonchera implements \IteratorAggregate, \Countable
{
	protected $comida = [];
	protected $original = true;

	public function __construct(array $comida = [])
	{
		$this->comida = $comida;
	}

	public function all()
	{
		return $this->comida; 
	}

	public function filter($callback)
	{
		return new static(array_filter($this->comida, $callback));
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

	public function getIterator()
	{
		return new \ArrayIterator($this->comida);
	}

	public function count()
	{
		return count($this->comida);
	}
}
