<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\Twitter as Twitter;

class Friends
{
	public function index()
	{
		$friends = Twitter::friends();
		$view = new Renderer('views/twitter/');
		$view->friends = $friends;
		$view->render('index.php'); 
	}


}



