<?php 

use Chmalo\HtmlNode;

require '../vendor/autoload.php';


$node = HtmlNode::texarea('Chmalo')
	->name('content'); 

var_dump($node('name'), $node('width', 100))

echo $node;
