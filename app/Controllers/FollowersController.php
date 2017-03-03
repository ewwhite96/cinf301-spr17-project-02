<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\Twitter as Twitter;



class FollowerController
{
	public function index()
	{
		$followers = Twitter::followers();
		$view = new Renderer('views/twitter/');
		$view->followers = $followers;
		$view->render('index.php');
	}
} 
