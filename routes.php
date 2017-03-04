<?php
use App\Controllers;

function route($controller, $action)
{
	switch)$controller)
	{
		case 'main':
			$controller = new App\Controllers\MainController();
			break;
		case 'blocks':
			$controller = new App\Controllers\BlocksController();
			break;
		case 'followers':
			$controller = new App\Controllers\FollowersController();
			break;
		case 'friends':
			$controller = new App\Controllers\Friends();
			break;
	}
	$controller->{$action}();
}

$controllers = array('main' => ['home'],
		'Twitter' => ['index', 'show']);

if(array_key_exists($controller, $controllers))
{
	if(in_array($action, $controllers[$controller}))
	{
		route($controller, $action);
	}
}

?> 

