<?php

class Person{
	public $firstName;
	public $lastName;
	public $age;

	public function __construct($firstName, $lastName){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
	}

	public function fullName(){
		return $this->firstName . ' '. $this->lastName;
	}
}

$person1 = new Person('Christian', 'Fernandez', '24');


$person2 = new Person('Jose', 'Fernandez', '24');


echo "{$person1->fullName()} es amigo de {$person2->fullName()}, ambos tienen $age años"; 