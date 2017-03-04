<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\Twitter as Twitter;
/*
 *FriendsController class that accesses data from the 
 *Twitter model class and passes it to a rendering class
 *to be rendered as a view
 *
 *@author ewwhite
 *
 *
 */
class FriendsController
{
	public function index()
	{
		$friends = Twitter::friends();
		$view = new Renderer('views/twitter/');
		$view->friends = $friends;
		$view->render('index.php'); 
	}


}



