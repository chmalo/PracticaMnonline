<?php

namespace Chmalo;

use Chmalo\armas\Espada;

class Soldado extends Unit
{	
	public function __construct($name, Espada $espada)
	{
		parent::__construct($name, $espada);
	} 
}
