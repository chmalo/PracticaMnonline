<?php

namespace Chmalo;

require 'src/helpers.php';
require 'src/Armadura.php';

spl_autoload_register(function($className))
{
	if(strpos($className, 'Chmalo\\') === 0)
	{
		$className = str_replace('Chmalo\\', '', $className);

		if (file_exists("src/$className.php"))
		{
			require "src/$className.php";
		}
	}
}


$armadura = new ArmaduraBronce();

$malo = new Arquero('Malo');

$christian = new Soldado('Christian');
//$christian->move('el norte');

$christian->attack($malo);

$christian->setArmadura(new ArmaduraPlata);

$christian->attack($malo);

$malo->attack($christian);
