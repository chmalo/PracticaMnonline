<?php 

use Chmalo\User;
use Chmalo\Comida;
use Chmalo\Lonchera;


require '../vendor/autoload.php';


$chris = new User(['name' => 'Chris']);

//hijas...
$maria = new User(['name' => 'Maria']);

$ana = new User(['name' => 'Ana']);

//casa...
$lonchera = new Lonchera(['Sandwich', 'Manzana', 'Papas', 'Jugo de naranja']);

$lonchera = new Lonchera([
	new Comida(['name' => 'Sandwich', 'bebida' => false]),
	new Comida(['name' => 'Manzana']),
	new Comida(['name' => 'Papas']),
	new Comida(['name' => 'Jugo de naranja', 'bebida' => true]),
	new Comida(['name' => 'Agua', 'bebida' => true])
]);


$maria->setAlmuerzo($lonchera);

//escuela...

$maria->eatMeal();



/*
$user = new User(['name' => 'Christian']);

$result = serialize($user);

file_put_contents('../storage/user.txt', $result); 

*/


/*
$user = new User();

$user->fill([
	'first_name' => 'Chirstian',
	'last_name' => 'Fernandez',
]);  

$user->nickname = 'Malo';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset($user->nickname)){
	echo "<p>Bienvenido {$user->nickname}</p>";
}
*/



