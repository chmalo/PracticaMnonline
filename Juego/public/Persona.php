<?php

namespace Chmalo;

class Persona
{
	protected $name;

	protected static $database = 'mysql';
	protected static $table = 'people'; 

	public function __construct($name)
	{
		$this->name = $name;
	}


	public function name()
	{
		return $this->name;
	}

	public function save()
	{
		echo "<p>Guardado {$this->name} en la tabla ". static::$table ."</p>";
	}
}

$christian = new Persona('Christian');
$christian->save();

Persona::$table = 'personas';

$malo = new Persona('malo');
$malo->save();

echo "<p>{$christian->name()}</p>";

echo "<p>{$malo->name()}</p>";
