<?php
namespace App\Controllers;
use App\Renderer as Renderer;
use App\Models\Twitter as Twitter;	

class BlocksController
{
	public function show()
	{

		if (!isset($_GET['id']))
			return route('home');

		$blocks = Twitter::blocks($_GET['id']);
		$view = new Renderer('views/Twitter/');
		$view->blocks = $blocks;
		$view->render('show.php');

	}





}
