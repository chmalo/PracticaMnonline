<?php 

use Chmalo\User;

require '../vendor/autoload.php';

$data = file_get_contents('../storage/user.txt');

$user = unserialize($data);

var_dump($user);

echo "<p>{$user->name}</p>";
