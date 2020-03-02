<?php

namespace Chmalo;

class User
{
	protected $attributes = [];

	public function __construct(array $attributes = [])
	{
		$this->attributes = $attributes;
	}	


	public function fill()
	{
		return $this->attributes = $attributes;
	}

	public function getAttributes()
	{
		return $this->fill($attributes);
	}

	public function getAttribute($name)
	{
		if (array_key_exists($name, $this->attributes)){
			return $this->attributes[$name];
		}	
	}

	public function setAttribute($name, $value)
	{
		$this->attributes[$name] = $value;
	}

	public function hasAttribute($name)
	{
		isset($this->attributes[$name]);
	}	

	public function __set($name, $value)
	{
		return $this->setAttribute($name, $value);
	}

	public function __get($name)
	{
		return $this->getAttribute($name);
	}

	public function __isset($name)
	{
		return $this->hasAttribute($name);
	}

	public function __unset($name)
	{
		unset($this->attributes[$name]);
	}
}
