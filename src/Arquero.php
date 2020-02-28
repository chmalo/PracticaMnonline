<?php

namespace Chmalo;

use Chmalo\armas\Arco;

class Arquero extends Unit
{
	public function __construct($name, Arco $arco)
	{
		parent::__construct($name, $arco);
	} 
}
