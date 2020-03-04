<?php 

use Chmalo\User;


require '../vendor/autoload.php';

$user = new User(['name' => 'Christian']);

$result = serialize($user);

file_put_contents('../storage/user.txt', $result); 

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



