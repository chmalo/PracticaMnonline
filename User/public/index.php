<?php 

use Chmalo\User;
use Chmalo\Lonchera;


require '../vendor/autoload.php';


$chris = new User(['name' => 'Chris']);

//hijas...
$maria = new User(['name' => 'Maria']);

$ana = new User(['name' => 'Ana']);

//casa...
$lonchera = new Lonchera(['sandwich', 'manzana']);
$lonchera2 = clone($lonchera);

$maria->setAlmuerzo($lonchera);

$ana->setAlmuerzo($lonchera2);

//escuela...
$maria->eat();

$ana->eat();



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



