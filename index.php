<?php
require_once __DIR__ . '/vendor/autoload.php';
/*
 *Index is the main class that pulls the model,
 *view, and controller all together.
 *
 *@author ewwhite
 *
 */

if(isset($_GET['controller']) && isset($_GET['action']))
{
	$controller = $_GET['controller'];
	$action = $_GET['action'];
}
else
{
	$controller = 'main';
	$action = 'home';
}

require_once ('views/layout.php');
?>
