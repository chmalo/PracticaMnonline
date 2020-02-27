<?php

class Person{
	protected $firstName;
	protected $lastName;
	protected $nickname;
	protected $changednickname = 0;
	protected $characternickname;
	public $age;

	public function __construct($firstName, $lastName){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
	}


	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function setNickname($nickname, $firstName, $lastName)
	{
		if($this->changednickname >=  2)
		{
			throw new Exception("No puedes cambiar el nickname mas de 2 veces");
		}

		if($this->characternickname <= 2)
		{
			throw new Exception("El nickname debe tener por lo menos 2 caracteres");
			
		}

		if ($this->nickname != $this->firstName && $this->nickname != $this->lastName)
		{
			$this->nickname = $nickname;
		}

		$this->changednickname++;
	}

	public function getNickname()
	{
		return $this->nickname;
	}

	public function getFullName(){
		return $this->firstName . ' '. $this->lastName;
	}
}

$person1 = new Person('Christian', 'Fernandez', '24');

$person1->setNickname('malo');

exit($person1->getNickname();

echo "{$person1->getFullName()} tiene $age años"; 