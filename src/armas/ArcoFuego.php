<?php

namespace Chmalo\armas;

use Chmalo\Arma;
use Chmalo\Unit;

class ArcoFuego extends Arma 
{
	protected $daño = 30;
	protected $magico = true;
	protected $description = ':unit dispara una flecha de fuego a :opponent'; 
}