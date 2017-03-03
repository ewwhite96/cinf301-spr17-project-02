<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\TwitterAPIExchange as Twitter;	

class TwitterController
{
	public function index()
	{
		$twitter = Twitter::complete();
		$view = new Renderer('views/Twitter/');
		$view->twitter = $twitter;
		$view->render('index.php');
	
	}

	public function show()
	{

		if (!isset($_GET['id']))
			return route('home', 'error');

		$twitter = Twitter::find($_GET['id']);
		$view = new Renderer('views/Twitter/');
		$view->twitter = $twitter;
		$view->render('show.php');

	}





}
