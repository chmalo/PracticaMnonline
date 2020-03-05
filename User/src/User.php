<?php
 
namespace Chmalo;

class User extends Model
{
	public $table = 'users';
	private $dbPassword = 'secret';

	protected $almuerzo;

	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);

		$this->almuerzo = new Lonchera();
	}

	public function setAlmuerzo($almuerzo)
	{
		$this->almuerzo = $almuerzo;
	}

	public function eat()
	{
		if($this->almuerzo->isEmpty()){
			throw new Exception("{$this->name} no tiene nada para comer :(");
		}

		echo "<p>{$this->name} almuerza {$this->almuerzo->shift()}</p>";
	}

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

	public function eatMeal()
	{
		$comida = $this->almuerzo->filter(function ($comida){
			return ! $comida->bebida;
		});

		$bebida = $this->almuerzo->filter(function ($bebida){
			return $comida->bebida;
		})

		echo "<p>{$this->name} tiene {$this->almuerzo->count()} alimentos</p>";

		echo "<p>{$this->name} tiene {$bebida->count()} bebidas</p>";


		foreach ($comida as $item) {
			echo "<p>{$this->name} come {$item->name}</p>";
		}

		foreach ($bebida as $item) {
			echo "<p>{$this->name} toma {$item->name}</p>";
		}
	}
}
 