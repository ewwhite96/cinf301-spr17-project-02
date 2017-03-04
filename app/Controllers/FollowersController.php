<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\Twitter as Twitter;

/*
 *FollowersController class that accesses data from the 
 *Twitter model class and passes it to a rendering class 
 *to be rendered as view
 *
 *@author ewwhite
 *
 */
class FollowersController
{
	public function index()
	{
		$followers = Twitter::followers();
		$view = new Renderer('views/twitter/');
		$view->followers = $followers;
		$view->render('index.php');
	}
} 
