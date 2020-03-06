<?php

require '../vendor/autoload.php';

use Chmalo\User;

$user = new User([
	'name' => 'Christian Fernandez',
	'FechaDeNacimiento' => '01/03/1995'
]);

echo "<p>{$user->name} tiene {$user->age} años</p>";
