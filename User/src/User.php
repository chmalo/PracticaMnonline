<?php

namespace Chmalo;

class User extends Model
{
	public $table = 'users';
	private $dbPassword = 'secret';

	public function __toString()
	{
		return $this->name;
	}

	public function __sleep()
	{
		return ['attributes', 'table'];
	}

	public function __wakeup()
	{
		$this->attributes['name'] = strtoupper($this->attributes['name']);

	}
}
 